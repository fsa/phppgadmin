<?php

	/**
	 * List rules on a table
	 *
	 * $Id: rules.php,v 1.1 2003/01/11 09:50:22 chriskl Exp $
	 */

	// Include application functions
	include_once('../conf/config.inc.php');

	$action = (isset($_REQUEST['action'])) ? $_REQUEST['action'] : '';
	$PHP_SELF = $_SERVER['PHP_SELF'];

	/**
	 * Displays a screen where they can enter a new index
	 */
	function doCreateIndex($msg = '') {
		global $data, $localData, $misc;
		global $PHP_SELF, $strName, $strDefinition, $strCreateIndex, $strIndexes, $strShowAllIndexes, $strColumns, $strSave, $strReset, $strExample;

		if (!isset($_POST['formIndex'])) $_POST['formIndex'] = '';
		if (!isset($_POST['formCols'])) $_POST['formCols'] = '';

		echo "<h2>", htmlspecialchars($_REQUEST['database']), ": {$strIndexes} : {$strCreateIndex} </h2>\n";
		$misc->printMsg($msg);
		
		echo "<form action=\"$PHP_SELF\" method=post>\n";
		echo "<table width=100%>\n";
		echo "<tr><th class=data>{$strName}</th></tr>\n";
		echo "<tr><td class=data1><input name=formIndex size={$data->_maxNameLen} maxlength={$data->_maxNameLen} value=\"",
			htmlspecialchars($_POST['formIndex']), "\"></td></tr>\n";
		echo "<tr><th class=data>{$strColumns}</th></tr>\n";
		echo "<tr><td class=data1><input name=formCols size={$data->_maxNameLen} value=\"",
			htmlspecialchars($_POST['formCols']), "\"> ({$strExample} col1, col2)</td></tr>\n";
		echo "</table>\n";
		echo "<p><input type=hidden name=action value=save_create_index>\n";
		echo $misc->form;
		echo "<input type=hidden name=table value=\"", htmlspecialchars($_REQUEST['table']), "\">\n";
		echo "<input type=submit value=\"{$strSave}\"> <input type=reset value=\"{$strReset}\"></p>\n";
		echo "</form>\n";
		
		echo "<p><a class=navlink href=\"$PHP_SELF?{$misc->href}&table=", urlencode($_REQUEST['table']),
			"\">{$strShowAllIndexes}</a></p>\n";
	}

	/**
	 * Actually creates the new index in the database
	 * @@ Note: this function can't handle columns with commas in them
	 */
	function doSaveCreateIndex() {
		global $localData;
		global $strIndexNeedsName, $strIndexNeedsCols, $strIndexCreated, $strIndexCreatedBad;
		
		// Check that they've given a name and at least one column
		if ($_POST['formIndex'] == '') doCreateIndex("{$strIndexNeedsName}");
		elseif ($_POST['formCols'] == '') doCreate("{$strIndexNeedsCols}");
		else {
			$status = $localData->createIndex($_POST['formIndex'], $_POST['table'], explode(',', $_POST['formCols']));
			if ($status == 0)
				doDefault($strIndexCreated);
			else
				doCreateIndex($strIndexCreatedBad);
		}
	}

	/**
	 * Show confirmation of drop index and perform actual drop
	 */
	function doDropIndex($confirm) {
		global $localData, $database, $misc;
		global $PHP_SELF, $strConfDropIndex, $strIndexDropped, $strIndexDroppedBad, $strYes, $strNo;

		if ($confirm) {
			echo "<h2>", htmlspecialchars($_REQUEST['database']), ": Tables: ",
				htmlspecialchars($_REQUEST['table']), ": " , htmlspecialchars($_REQUEST['index']), ": Drop</h2>\n";

			echo "<p>", sprintf($strConfDropIndex, htmlspecialchars($_REQUEST['index'])), "</p>\n";

			echo "<form action=\"$PHP_SELF\" method=\"post\">\n";
			echo "<input type=hidden name=action value=drop_index>\n";
			echo "<input type=hidden name=table value=\"", htmlspecialchars($_REQUEST['table']), "\">\n";
			echo "<input type=hidden name=index value=\"", htmlspecialchars($_REQUEST['index']), "\">\n";
			echo $misc->form;
			echo "<input type=submit name=choice value=\"{$strYes}\"> <input type=submit name=choice value=\"{$strNo}\">\n";
			echo "</form>\n";
		}
		else {
			$status = $localData->dropIndex($_POST['index'], 'RESTRICT');
			if ($status == 0)
				doDefault($strIndexDropped);
			else
				doDefault($strIndexDroppedBad);
		}

	}

	/**
	 * List all the rules on the table
	 */
	function doDefault($msg = '') {
		global $data, $localData, $misc;
		global $PHP_SELF;
		global $strRules, $strName, $strDefinition, $strActions, $strNoRules, $strCreateRule, $strDrop;

		$misc->printTableNav();
		echo "<h2>", htmlspecialchars($_REQUEST['database']), ": ", htmlspecialchars($_REQUEST['table']), ": {$strRules}</h2>\n";
		$misc->printMsg($msg);

		$rules = &$localData->getRules($_REQUEST['table']);
		
		if ($rules->recordCount() > 0) {
			echo "<table>\n";
			echo "<tr><th class=\"data\">{$strName}</th><th class=\"data\">{$strDefinition}</th><th class=\"data\">{$strActions}</th>\n";
			$i = 0;
			
			while (!$rules->EOF) {
				$id = ( ($i % 2 ) == 0 ? '1' : '2' );
				echo "<tr><td class=\"data{$id}\">", htmlspecialchars( $rules->f[$data->rlFields['rulename']]), "</td>";
				echo "<td class=\"data{$id}\">", htmlspecialchars( $rules->f[$data->rlFields['ruledef']]), "</td>";
				echo "<td class=\"data{$id}\">";
				echo "<a href=\"$PHP_SELF?action=confirm_drop&{$misc->href}&rule=", htmlspecialchars( $rules->f[$data->rulFields['rulename']]),
					"&table=", htmlspecialchars($_REQUEST['table']), "\">{$strDrop}</td></tr>\n";

				$rules->movenext();
				$i++;
			}

			echo "</table>\n";
			}
		else
			echo "<p>{$strNoRules}</p>\n";
		
		echo "<p><a class=\"navlink\" href=\"$PHP_SELF?action=create&{$misc->href}&table=", htmlspecialchars($_REQUEST['table']), "\">{$strCreateRule}</a></p>\n";
	}

	$misc->printHeader($strTables . ' - ' . $_REQUEST['table'] . ' - ' . $strRules);
	
	switch ($action) {
		case 'save_create':
			doSaveCreate();
			break;
		case 'create':
			doCreate();
			break;
		case 'drop':
			if ($_POST['choice'] == $strYes) doDrop(false);
			else doDefault();
			break;
		case 'confirm_drop':
			doDrop(true);
			break;
		default:
			doDefault();
			break;
	}
	
	$misc->printFooter();

?>