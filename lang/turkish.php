<?php

	/**
	 * Turkish language file for phpPgAdmin.  Use this as a basis
	 * for new translations.
	 *
	 * $Id: turkish.php,v 1.1 2003/04/27 11:00:05 chriskl Exp $
	 */

	// Language and character set
	$lang['applang'] = 'T�rk�e';
	$lang['appcharset'] = 'ISO-8859-9';

	// Basic strings
	$lang['strintro'] = 'phpPgAdmin\'e ho�geldiniz.';
	$lang['strlogin'] = 'Giri�';
	$lang['strloginfailed'] = 'Giri� Ba�ar�s�z';
	$lang['strserver'] = 'Sunucu';
	$lang['strlogout'] = '��k��';
	$lang['strowner'] = 'Sahibi';
	$lang['straction'] = 'Eylem';
	$lang['stractions'] = 'Eylemler';
	$lang['strname'] = 'Ad';
	$lang['strdefinition'] = 'Tan�m';
	$lang['stroperators'] = 'Operat�rler';
	$lang['straggregates'] = 'Aggregates';
	$lang['strproperties'] = '�zellikler';
	$lang['strbrowse'] = 'G�zat';
	$lang['strdrop'] = 'Sil';
	$lang['strdropped'] = 'Silindi';
	$lang['strnull'] = 'Null';
	$lang['strnotnull'] = 'Null/Null de�il';
	$lang['strprev'] = '�nceki';
	$lang['strnext'] = 'Sonraki';
	$lang['strfailed'] = 'ba�ar�s�z oldu';
	$lang['strcreate'] = 'Yarat';
	$lang['strcreated'] = 'Yarat�ld�';
	$lang['strcomment'] = 'Yorum';
	$lang['strlength'] = 'Uzunluk';
	$lang['strdefault'] = '�n tan�ml� de�er';
	$lang['stralter'] = 'De�i�tir';
	$lang['strok'] = 'Tamam';
	$lang['strcancel'] = '�ptal Et';
	$lang['strsave'] = 'Kaydet';
	$lang['strreset'] = 'Temizle';
	$lang['strinsert'] = 'Ekle';
	$lang['strselect'] = 'Se�';
	$lang['strdelete'] = 'Sil';
	$lang['strupdate'] = 'G�ncelle';
	$lang['strreferences'] = 'References';
	$lang['stryes'] = 'Evet';
	$lang['strno'] = 'Hay�r';
	$lang['stredit'] = 'D�zenle';
	$lang['strcolumns'] = 'Kolonlar';
	$lang['strrows'] = 'sat�r';
	$lang['strexample'] = '�rnek:';
	$lang['strback'] = 'Geri';
	$lang['strqueryresults'] = 'Sorgu sonu�lar�';
	$lang['strshow'] = 'G�ster';
	$lang['strempty'] = 'Bo�';
	$lang['strlanguage'] = 'Dil';
	$lang['strencoding'] = 'Karakter kodlamas�';
	$lang['strvalue'] = 'De�er';
	$lang['strunique'] = 'Tekil';
	$lang['strprimary'] = 'Birincil';
	$lang['strexport'] = 'Export';
	$lang['strsql'] = 'SQL';
	$lang['strgo'] = 'Devam Et';
	$lang['stradmin'] = 'Y�netici';
	$lang['strvacuum'] = 'Vacuum';
	$lang['stranalyze'] = 'Analyze';
	$lang['strcluster'] = 'Cluster';
	$lang['strreindex'] = 'Reindex';
	$lang['strrun'] = '�al��t�r';
	$lang['stradd'] = 'Ekle';
	$lang['strevent'] = 'Event';
	$lang['strwhere'] = 'Where';
	$lang['strinstead'] = 'Do Instead';
	$lang['strwhen'] = 'When';
	$lang['strformat'] = 'Format';

	// Error handling
	$lang['strnoframes'] = 'Bu uygulamay� kullanabilmek i�in frame destekleyen bir web istemcisi kullanman�z gerekmektedir.';
	$lang['strbadconfig'] = 'config.inc.php dosyaniz g�ncel de�il. Bu dosyay� yeni config.inc.php-dist dosyas�ndan yaratman�z gerekmektedir.';
	$lang['strnotloaded'] = 'PHP kurulumunuzda PostgreSQL deste�i bulunamam��t�r.';
	$lang['strbadschema'] = 'Ge�ersiz �ema.';
	$lang['strbadencoding'] = '�stemci dil kodlamas�n� ayarlamaya �al���rken bir hata olu�tu.';
	$lang['strsqlerror'] = 'SQL hatas�:';
	$lang['strinstatement'] = '�stteki hata, a�a��daki ifade i�inde olu�tu:';
	$lang['strinvalidparam'] = 'Ge�ersiz betik parametreleri.';
	$lang['strnodata'] = 'Sat�r bulunamad�.';

	// Tables
	$lang['strtable'] = 'Tablo';
	$lang['strtables'] = 'Tablolar';
	$lang['strshowalltables'] = 'T�m tablolar� g�ster';
	$lang['strnotables'] = 'Veritaban�nda tablo bulunamad�.';
	$lang['strnotable'] = 'Veritaban�nda tablo bulunamad�.';
	$lang['strcreatetable'] = 'Yeni tablo yarat';
	$lang['strtablename'] = 'Tablo ad�';
	$lang['strtableneedsname'] = 'Tablonuza bir ad vermeniz gerekmektedir.';
	$lang['strtableneedsfield'] = 'En az bir alan belirtmeniz gerekmektedir.';
	$lang['strtableneedscols'] = 'Ge�erli miktarda kolon say�s� belirtmeniz gerekmektedir.';
	$lang['strtablecreated'] = 'Tablo yarat�ld�.';
	$lang['strtablecreatedbad'] = 'Tablo yarat�lamad�.';
	$lang['strconfdroptable'] = '"%s" tablosunu kald�rmak istedi�inizden emin misiniz?';
	$lang['strtabledropped'] = 'Tablo kald�r�ld�.';
	$lang['strtabledroppedbad'] = 'Tablo kald�r�lamad�.';
	$lang['strconfemptytable'] = '"%s" tablosunu bo�altmak istedi�inizden emin misiniz?';
	$lang['strtableemptied'] = 'Tablo bo�alt�ld�.';
	$lang['strtableemptiedbad'] = 'Tablo bo�alt�lamad�.';
	$lang['strinsertrow'] = 'Yeni kay�t gir';
	$lang['strrowinserted'] = 'Yeni kay�t girildi.';
	$lang['strrowinsertedbad'] = 'Yeni kay�t girme i�lemi ba�ar�s�z oldu.';
	$lang['streditrow'] = 'Kay�d�n i�eri�ini de�i�tir.';
	$lang['strrowupdated'] = 'Kay�t g�ncellendi.';
	$lang['strrowupdatedbad'] = 'Kay�t g�ncelleme i�leme ba�ar�s�z oldu.';
	$lang['strdeleterow'] = 'Kayd� sil';
	$lang['strconfdeleterow'] = 'Bu kayd� silmek istedi�inize emin misiniz?';
	$lang['strrowdeleted'] = 'Kay�t silindi.';
	$lang['strrowdeletedbad'] = 'Kay�t silinme i�lemi ba�ar�s�z oldu.';
	$lang['strsaveandrepeat'] = 'Kaydet ve tekrarla';
	$lang['strfield'] = 'Alan';
	$lang['strfields'] = 'Alanlar';
	$lang['strnumfields'] = 'Alan say�s�';
	$lang['strfieldneedsname'] = 'Alan k�sm�na ad vermelisiniz';
	$lang['strselectneedscol'] = 'En az bir kolon i�aretlemelisiniz';
	$lang['straltercolumn'] = 'Kolonu de�i�tir (alter)';
	$lang['strcolumnaltered'] = 'Kolon de�i�tirildi (alter)';
	$lang['strcolumnalteredbad'] = 'Kolon de�i�tirilme i�lemi ba�ar�s�z oldu.';
        $lang['strconfdropcolumn'] = '"%s" kolonunu "%s" tablosundan silmek istedi�inize emin misiniz?';
	$lang['strcolumndropped'] = 'Kolon silindi.';
	$lang['strcolumndroppedbad'] = 'Kolon silme i�lemi ba�ar�s�z oldu.';
	$lang['straddcolumn'] = 'Yeni kolon ekle';
	$lang['strcolumnadded'] = 'Kolon eklendi.';
	$lang['strcolumnaddedbad'] = 'Kolon eklenemedi.';
	$lang['strschemaanddata'] = '�ema ve veri';
	$lang['strschemaonly'] = 'Sadece �ema';
	$lang['strdataonly'] = 'Sadece veri';

	// Users
	$lang['struseradmin'] = 'Kullan�c� Y�netimi';
	$lang['struser'] = 'Kullan�c�';
	$lang['strusers'] = 'Kullan�c�lar';
	$lang['strusername'] = 'Kullan�c� Ad�';
	$lang['strpassword'] = '�ifresi';
	$lang['strsuper'] = 'Superuser m�?';
	$lang['strcreatedb'] = 'Veritaban� yaratabilsin mi?';
	$lang['strexpires'] = 'Expires';
	$lang['strnousers'] = 'Kullan�c� bulunamad�.';
        $lang['struserupdated'] = 'Kullan�c� g�ncellendi.';
	$lang['struserupdatedbad'] = 'Kullan�c� g�ncelleme i�lemi ba�ar�s�z oldu.';
	$lang['strshowallusers'] = 'T�m kullan�c�lar� g�ster.';
	$lang['strcreateuser'] = 'Yeni kullan�c� yarat';
	$lang['strusercreated'] = 'Kullan�c� yarat�ld�.';
	$lang['strusercreatedbad'] = 'Kullan�c� yarat�lma i�lemi ba�ar�s�z oldu.';
	$lang['strconfdropuser'] = '"%s" kullan�c�s�n� silmek istedi�inize emin misiniz?';
	$lang['struserdropped'] = 'Kullan�c� silindi.';
	$lang['struserdroppedbad'] = 'Kullan�c� silme i�lemi ba�ar�s�z oldu.';
		
	// Groups
	$lang['strgroupadmin'] = 'Grup Y�netimi';
	$lang['strgroup'] = 'Grup';
	$lang['strgroups'] = 'Gruplar';
	$lang['strnogroup'] = 'Grup bulunamad�.';
	$lang['strnogroups'] = 'Grup bulunamad�.';
	$lang['strcreategroup'] = 'Yeni grup yarat';
	$lang['strshowallgroups'] = 'T�m gruplar� g�ster';
	$lang['strgroupneedsname'] = 'Grup yaratabilmek i�in bir ad vermelisiniz.';
	$lang['strgroupcreated'] = 'Grup yarat�ld�.';
	$lang['strgroupcreatedbad'] = 'Grup yaratma i�lemi ba�ar�s�z oldu.';	
	$lang['strconfdropgroup'] = '"%s" grubunu silmek istedi�inize emin misiniz?';
	$lang['strgroupdropped'] = 'Grup silindi.';
	$lang['strgroupdroppedbad'] = 'Grup silme i�lemi ba�ar�s�z oldu.';
	$lang['strmembers'] = '�yeler';

	// Privilges
	$lang['strprivilege'] = '�zni';
	$lang['strprivileges'] = '�zinler';
	$lang['strnoprivileges'] = 'Bu nesnenin bir izni yoktur.';
	$lang['strgrant'] = '�zni ver';
	$lang['strrevoke'] = '�zni kald�r';
	$lang['strgranted'] = '�zimler verildi.';
	$lang['strgrantfailed'] = '�zinlerin grant i�lemi ba�ar�s�z oldu.';
	$lang['strgrantuser'] = 'Kullan�c� izinlerini d�zenle';
	$lang['strgrantgroup'] = 'Grup izinlerini d�zenle';

	// Databases
	$lang['strdatabase'] = 'Veritaban�';
	$lang['strdatabases'] = 'Veritabanlar�';
	$lang['strshowalldatabases'] = 'T�m veritabanlar�n� g�ster';
	$lang['strnodatabase'] = 'Veritaban� bulunamad�.';
	$lang['strnodatabases'] = 'Veritaban� bulunamad�.';
	$lang['strcreatedatabase'] = 'Veritaban� yarat';
	$lang['strdatabasename'] = 'Veritaban� ad�';
	$lang['strdatabaseneedsname'] = 'Veritaban�n�za bir ad vermelisiniz.';
	$lang['strdatabasecreated'] = 'Veritaban� yarat�ld�.';
	$lang['strdatabasecreatedbad'] = 'Veritaban� yarat�lamad�.';	
	$lang['strconfdropdatabase'] = '"%s" veritaban�n� kald�rmak istedi�inize emin misiniz?';
	$lang['strdatabasedropped'] = 'Veritaban� kald�r�ld�.';
	$lang['strdatabasedroppedbad'] = 'Veritaban� kald�rma ba�ar�s�z oldu.';
	$lang['strentersql'] = 'Veritaban� �zerinde �al��t�r�lacak sorgu/sorgular� a�a��ya yaz�n�z:';
	$lang['strvacuumgood'] = 'Vacuum i�lemi tamamland�.';
	$lang['strvacuumbad'] = 'Vacuum i�lemi ba�ar�s�z oldu.';
	$lang['stranalyzegood'] = 'Analyze i�lemi tamamland�.';
	$lang['stranalyzebad'] = 'Analyze i�lemi ba�ar�s�z oldu.';

	// Views
	$lang['strview'] = 'View';
	$lang['strviews'] = 'Viewlar';
	$lang['strshowallviews'] = 'T�m viewlar� g�ster';
	$lang['strnoview'] = 'Bir view bulunamad�.';
	$lang['strnoviews'] = 'Bir view bulunamad�.';
	$lang['strcreateview'] = 'View yarat';
	$lang['strviewname'] = 'View ad�';
	$lang['strviewneedsname'] = 'View i�in bir ad belirtmelisiniz.';
	$lang['strviewneedsdef'] = 'View i�in bir tan�m belirtmelisiniz.';
	$lang['strviewcreated'] = 'View yarat�ld�.';
	$lang['strviewcreatedbad'] = 'View yaratma i�lemi ba�ar�s�z oldu.';
	$lang['strconfdropview'] = '"%s" viewini kald�rmak istedi�inize emin misiniz?';
	$lang['strviewdropped'] = 'View kald�r�ld�.';
	$lang['strviewdroppedbad'] = 'View kald�rma i�lemi ba�ar�s�z oldu.';
	$lang['strviewupdated'] = 'View g�ncellendi.';
	$lang['strviewupdatedbad'] = 'View g�ncelleme i�lemi ba�ar�s�z oldu.';

	// Sequences
	$lang['strsequence'] = 'Sequence';
	$lang['strsequences'] = 'Sequences';
	$lang['strshowallsequences'] = 'Show all sequences';
	$lang['strnosequence'] = 'No sequence found.';
	$lang['strnosequences'] = 'No sequences found.';
	$lang['strcreatesequence'] = 'Create sequence';
	$lang['strlastvalue'] = 'Son de�er';
	$lang['strincrementby'] = 'Artt�rma de�eri';	
	$lang['strstartvalue'] = 'Ba�lang�� De�eri';
	$lang['strmaxvalue'] = 'Max De�er';
	$lang['strminvalue'] = 'Min De�er';
	$lang['strcachevalue'] = 'Cache De�eri';
	$lang['strlogcount'] = 'Log Count';
	$lang['striscycled'] = 'Is Cycled?';
	$lang['striscalled'] = 'Is Called?';
	$lang['strsequenceneedsname'] = 'Sequence i�in bir ad belirtmelisiniz.';
	$lang['strsequencecreated'] = 'Sequence yarat�ld�.';
	$lang['strsequencecreatedbad'] = 'Sequence yaratma i�lemi ba�ar�s�z oldu.'; 
	$lang['strconfdropsequence'] = '"%s" sequence ini kald�rmak istedi�inize emin misiniz?';
	$lang['strsequencedropped'] = 'Sequence kald�r�ld�.';
	$lang['strsequencedroppedbad'] = 'Sequence kald�rma i�lemi ba�ar�s�z oldu.';

	// Indexes
	$lang['strindexes'] = 'Indeksler';
	$lang['strindexname'] = 'Indeks ad�';
	$lang['strshowallindexes'] = 'T�m indeksleri g�ster';
	$lang['strnoindex'] = 'Hi�bir indeks bulunamad�.';
	$lang['strnoindexes'] = 'Hi�bir indeks bulunamad�.';
	$lang['strcreateindex'] = 'Indeks yarat';
	$lang['strindexname'] = 'Indeks ad�';
	$lang['strtabname'] = 'Tab Ad�';
	$lang['strcolumnname'] = 'Kolon ad�';
	$lang['strindexneedsname'] = 'Indeksinize bir ad vermeniz gerekmektedir.';
	$lang['strindexneedscols'] = 'Ge�erli kol�n say�s� vermeniz gerekmektedir.';
	$lang['strindexcreated'] = 'Indeks yarat�ld�.';
	$lang['strindexcreatedbad'] = 'Index creation failed.';
	$lang['strconfdropindex'] = '"%s" indeksini kald�rmak istedi�inize emin misiniz?';
	$lang['strindexdropped'] = 'Indeks kald�r�ld�.';
	$lang['strindexdroppedbad'] = 'Indeks kald�r�lamad�.';
	$lang['strkeyname'] = 'Anahtar ad�';
	$lang['struniquekey'] = 'Tekil (Unique) Anahtar';
	$lang['strprimarykey'] = 'Birincil Anahtar (Primary Key)';
 	$lang['strindextype'] = 'Indeksin tipi';
	$lang['strindexname'] = 'Indeksin ad�';
	$lang['strtablecolumnlist'] = 'Tablodaki kolonlar';
	$lang['strindexcolumnlist'] = 'Indeksteki kolonlar';

	// Rules
	$lang['strrules'] = 'Rules';
	$lang['strrule'] = 'Rule';
	$lang['strshowallrules'] = 'Show all Rules';
	$lang['strnorule'] = 'Rule bulunamad�.';
	$lang['strnorules'] = 'Rule bulunamad�.';
	$lang['strcreaterule'] = 'Rule yarat';
	$lang['strrulename'] = 'Rule ad�';
	$lang['strruleneedsname'] = 'Rule i�in bir ad belirtmelisiniz.';
	$lang['strrulecreated'] = 'Rule yarat�ld�.';
	$lang['strrulecreatedbad'] = 'Rule yaratma i�lemi ba�ar�s�z oldu.';
	$lang['strconfdroprule'] = '"%s" kural�n� "%s" tablosundan silmek istedi�inize emin misiniz?';
	$lang['strruledropped'] = 'Rule silindi';
	$lang['strruledroppedbad'] = 'Rule silinme i�lemi ba�ar�s�z oldu.';

	// Constraints
	$lang['strconstraints'] = 'K�s�tlamalar';
	$lang['strshowallconstraints'] = 'T�m k�s�tlamalar� (constraint) g�ster.';
	$lang['strnoconstraints'] = 'Hi�bir k�s�tlama (constraint) bulunamad�.';
	$lang['strcreateconstraint'] = 'K�s�tlama (Constraint) yarat';
	$lang['strconstraintcreated'] = 'K�s�tlama (Constraint) yarat�ld�.';
	$lang['strconstraintcreatedbad'] = 'K�s�tlama (Constraint) yaratma i�lemi ba�ar�s�z oldu.';
	$lang['strconfdropconstraint'] = '"%s" �zerindeki "%s" k�s�tlamas�n� (constraint) kald�rmak istiyor musunuz?';
	$lang['strconstraintdropped'] = 'K�s�tlama (Constraint) kald�r�ld�';
	$lang['strconstraintdroppedbad'] = 'K�s�tlama (Constraint) i�lemi ba�ar�s�z oldu.';
	$lang['straddcheck'] = 'Kontrol (Check) ekle';
	$lang['strcheckneedsdefinition'] = 'Kontrol (Check) k�s�tlamas� (constraint) i�in bir tan�m girilmelidir.';
	$lang['strcheckadded'] = 'Kontrol k�s�tlamas� (Check constraint) eklendi.';
	$lang['strcheckaddedbad'] = 'Kontrol k�s�tlamas� (Check constraint) ekleme i�lemi ba�ar�s�z oldu.';
	$lang['straddpk'] = 'Birincil Anahtar Ekle';
	$lang['strpkneedscols'] = 'Birincil anahtar i�in en az bir kolon gereklidir.';
	$lang['strpkadded'] = 'Birincil anahtar eklendi.';
	$lang['strpkaddedbad'] = 'Birincil anahtar eklenemedi.';
	$lang['stradduniq'] = 'Tekil (Unique) anahtar ekle';
	$lang['struniqneedscols'] = 'Tekil anahtar yaratmak i�in en az bir kolon gerekir.';
	$lang['struniqadded'] = 'Tekil anahtar eklendi.';
	$lang['struniqaddedbad'] = 'Tekil anahtar eklenemedi.';
	$lang['straddfk'] = '�kincil anahtar ekle';
	$lang['strfkneedscols'] = '�kincil anahtar yaratmak i�in en az bir kolon gerekir.';
	$lang['strfkadded'] = '�kincil anahtar eklendi.';
	$lang['strfkaddedbad'] = '�kincil anahtar eklenemedi.';
	$lang['strfktarget'] = 'Hedef tablo';

	// Functions
	$lang['strfunction'] = 'Fonksiyon';
	$lang['strfunctions'] = 'Fonksiyonlar';
	$lang['strshowallfunctions'] = 'T�m fonksiyonlar� g�ster';
	$lang['strnofunction'] = 'Fonksiyon bulunamad�.';
	$lang['strnofunctions'] = 'Fonksiyon bulunamad�.';
	$lang['strcreatefunction'] = 'Fonksiyon yarat';
	$lang['strfunctionname'] = 'Fonksiyon ad�';
	$lang['strreturns'] = 'D�nderilen de�er';
	$lang['strarguments'] = 'Arg�manlar';
	$lang['strfunctionneedsname'] = 'Fonksiyona bir ad vermelisiniz.';
	$lang['strfunctionneedsdef'] = 'Fonksiyona bir tan�m vermelisiniz.';
	$lang['strfunctioncreated'] = 'Fonksiyon yarat�ld�.';
	$lang['strfunctioncreatedbad'] = 'Fonksiyon yaratma i�lemi ba�ar�s�z oldu.';
	$lang['strconfdropfunction'] = '"%s" fonksiyonunu kald�rmak istedi�inize emin misiniz?';
	$lang['strfunctiondropped'] = 'Fonksiyon kald�r�ld�.';
	$lang['strfunctiondroppedbad'] = 'Fonksiyon kald�rma i�lemi ba�ar�s�z oldu.';
	$lang['strfunctionupdated'] = 'Fonksiyon g�ncellendi.';
	$lang['strfunctionupdatedbad'] = 'Function g�ncelleme i�lemi ba�ar�s�z oldu.';

	// Triggers
	$lang['strtrigger'] = 'Trigger';
	$lang['strtriggers'] = 'Triggerlar';
	$lang['strshowalltriggers'] = 'T�m triggerlar� g�ster';
	$lang['strnotrigger'] = 'Trigger bulunamad�.';
	$lang['strnotriggers'] = 'Trigger bulunamad�.';
	$lang['strcreatetrigger'] = 'Yeni trigger yarat';
	$lang['strtriggerneedsname'] = 'Trigger i�in bir ad belirtmelisiniz.';
	$lang['strtriggerneedsfunc'] = 'Trigger i�in bir fonksiyon belirtmelisiniz.';
	$lang['strtriggercreated'] = 'Trigger yarat�ld�.';
	$lang['strtriggercreatedbad'] = 'Trigger yarat�lamad�.';
	$lang['strconfdroptrigger'] = '"%s" triggerini "%s" tablosundan kald�rmak istedi�inize emin misiniz?';
	$lang['strtriggerdropped'] = 'Trigger silindi.';
	$lang['strtriggerdroppedbad'] = 'Trigger silinme i�lemi ba�ar�s�z oldu.';

	// Types
	$lang['strtype'] = 'Veri tipi';
	$lang['strtypes'] = 'Veri tipleri';
	$lang['strshowalltypes'] = 'T�m veri tiplerini g�ster';
	$lang['strnotype'] = 'Hi� veri tipi bulunamad�.';
	$lang['strnotypes'] = 'Hi� veri tipi bulunamad�.';
	$lang['strcreatetype'] = 'Yeni veri tipi yarat';
	$lang['strtypename'] = 'Veri tipi ad�';
	$lang['strinputfn'] = 'Giri� (Input) fonksiyonu';
	$lang['stroutputfn'] = '��k�� (Output) fonksiyonu';
	$lang['strpassbyval'] = 'Passed by val?';
	$lang['stralignment'] = 'Alignment';
	$lang['strelement'] = 'Eleman';
	$lang['strdelimiter'] = 'Delimiter';
	$lang['strstorage'] = 'Storage';
	$lang['strtypeneedsname'] = 'Veri tipi i�in bir ad vermelisiniz.';
	$lang['strtypeneedslen'] = 'Veri tipiniz i�in bir uzunluk belirtmelisiniz.';
	$lang['strtypecreated'] = 'Veri tipi yarat�ld�';
	$lang['strtypecreatedbad'] = 'Veri tipi yarat�lamad�.';
	$lang['strconfdroptype'] = '"%s" veri tipini kald�rmak istedi�inize emin misiniz?';
	$lang['strtypedropped'] = 'Veri tipi kald�r�ld�.';
	$lang['strtypedroppedbad'] = 'Veri tipi kald�r�lamad�.';

	// Schemas
	$lang['strschema'] = '�ema';
	$lang['strschemas'] = '�emalar';
	$lang['strshowallschemas'] = 'T�m �emalar� g�ster';
	$lang['strnoschema'] = 'Bir �ema bulunamad�.';
	$lang['strnoschemas'] = 'Bir �ema bulunamad�.';
	$lang['strcreateschema'] = '�ema yarat';
	$lang['strschemaname'] = '�ema ad�';
	$lang['strschemaneedsname'] = '�ema i�in bir ad belirtmelisiniz.';
	$lang['strschemacreated'] = '�ema yarat�ld�';
	$lang['strschemacreatedbad'] = '�ema yaratma i�lemi ba�ar�s�z oldu';
	$lang['strconfdropschema'] = '"%s" �emas�n� kald�rmak istedi�inize emin misiniz?';
	$lang['strschemadropped'] = '�ema kald�r�ld�.';
	$lang['strschemadroppedbad'] = '�ema kald�rma i�lemi ba�ar�s�z oldu.';

	// Reports
	$lang['strreport'] = 'Rapor';
	$lang['strreports'] = 'Raporlar';
	$lang['strshowallreports'] = 'T�m raporlar� g�ster';
	$lang['strnoreports'] = 'Hi�bir rapor bulunamad�';
	$lang['strcreatereport'] = 'Rapor yarat�ld�.';
	$lang['strreportdropped'] = 'Rapor silindi';
	$lang['strreportdroppedbad'] = 'Rapor silme i�i ba�ar�s�z oldu.';
	$lang['strconfdropreport'] = '"%s" raporunu silmek istedi�inize emin misiniz?';
	$lang['strreportneedsname'] = 'Raporunuza bir ad vermelisiniz.';
	$lang['strreportneedsdef'] = 'Raporunuz i�in SQL sorgular� yazmal�s�n�z.';
	$lang['strreportcreated'] = 'Rapor kaydedildi.';
	$lang['strreportcreatedbad'] = 'Rapor kaydetme ba�ar�s�z oldu.';

	// Miscellaneous
	$lang['strtopbar'] = '%s,  %s:%s  �zerinde �al���yor -- "%s" kullan�c�s� ile , %s tarihinde giri� yapt�n�z';
	$lang['strtimefmt'] = 'jS M, Y g:iA';

?>