<?php
$translations = array(
	// label for database system selection (MySQL, SQLite, ...)
	'System' => 'Sistem',
	'Server' => 'Server',
	'Username' => 'Korisničko ime',
	'Password' => 'Lozinka',
	'Permanent login' => 'Trajna prijava',
	'Login' => 'Prijava',
	'Logout' => 'Odjava',
	'Logged as: %s' => 'Prijavi se kao: %s',
	'Logout successful.' => 'Uspešna odjava.',
	'Invalid server or credentials.' => null,
	'Language' => 'Jezik',
	'Invalid CSRF token. Send the form again.' => 'Nevažeći CSRF kod. Proslijedite ponovo formu.',
	'No extension' => 'Bez dodataka',
	'None of the supported PHP extensions (%s) are available.' => 'Nijedan od podržanih PHP dodataka nije dostupan.',
	'Session support must be enabled.' => 'Morate omogućiti podršku za sesije.',
	'Session expired, please login again.' => 'Vaša sesija je istekla, prijavite se ponovo.',
	'%s version: %s through PHP extension %s' => '%s verzija: %s pomoću PHP dodatka je %s',
	'Refresh' => 'Osveži',

	// text direction - 'ltr' or 'rtl'
	'ltr' => 'ltr',

	'Privileges' => 'Dozvole',
	'Create user' => 'Novi korisnik',
	'User has been dropped.' => 'Korisnik je izbrisan.',
	'User has been altered.' => 'Korisnik je izmijenjen.',
	'User has been created.' => 'korisnik je spašen.',
	'Hashed' => 'Heširano',
	'Column' => 'kolumna',
	'Routine' => 'Rutina',
	'Grant' => 'Dozvoli',
	'Revoke' => 'Opozovi',

	'Process list' => 'Spisak procesa',
	'%d process(es) have been killed.' => array('%d proces je ukinut.', '%d procesa su ukinuta.', '%d procesa je ukinuto.'),
	'Kill' => 'Ubij',

	'Variables' => 'Promijenljive',
	'Status' => 'Status',

	'SQL command' => 'SQL komanda',
	'%d query(s) executed OK.' => array('%d upit je uspiješno izvršen.', '%d upita su uspiješno izvršena.', '%d upita je uspiješno izvršeno.'),
	'Query executed OK, %d row(s) affected.' => array('Upit je uspiješno izvršen, %d red je ažuriran.', 'Upit je uspiješno izvršen, %d reda su ažurirana.', 'Upit je uspiješno izvršen, %d redova je ažurirano.'),
	'No commands to execute.' => 'Bez komandi za izvršavanje.',
	'Error in query' => 'Greška u upitu',
	'Execute' => 'Izvrši',
	'Stop on error' => 'Zaustavi prilikom greške',
	'Show only errors' => 'Prikazuj samo greške',
	// sprintf() format for time of the command
	'%.3f s' => '%.3f s',
	'History' => 'Historijat',
	'Clear' => 'Očisti',
	'Edit all' => 'Izmijeni sve',

	'File upload' => 'Slanje datoteka',
	'From server' => 'Sa servera',
	'Webserver file %s' => 'Datoteka %s sa veb servera',
	'Run file' => 'Pokreni datoteku',
	'File does not exist.' => 'Datoteka ne postoji.',
	'File uploads are disabled.' => 'Onemogućeno je slanje datoteka.',
	'Unable to upload a file.' => 'Slanje datoteke nije uspelo.',
	'Maximum allowed file size is %sB.' => 'Najveća dozvoljena veličina datoteke je %sB.',
	'Too big POST data. Reduce the data or increase the %s configuration directive.' => 'Preveliki POST podatak. Morate da smanjite podatak ili povećajte vrijednost konfiguracione direktive %s.',

	'Export' => 'Izvoz',
	'Output' => 'Ispis',
	'open' => 'otvori',
	'save' => 'spasi',
	'Format' => 'Format',
	'Data' => 'Podaci',

	'Database' => 'Baza podataka',
	'database' => 'baza podataka',
	'Use' => 'Koristi',
	'Select database' => 'Izaberite bazu',
	'Invalid database.' => 'Neispravna baza podataka.',
	'Database has been dropped.' => 'Baza podataka je izbrisana.',
	'Databases have been dropped.' => 'Baze podataka su izbrisane.',
	'Database has been created.' => 'Baza podataka je spašena.',
	'Database has been renamed.' => 'Baza podataka je preimenovana.',
	'Database has been altered.' => 'Baza podataka je izmijenjena.',
	'Alter database' => 'Ažuriraj bazu podataka',
	'Create database' => 'Formiraj bazu podataka',
	'Database schema' => 'Šema baze podataka',

	// link to current database schema layout
	'Permanent link' => 'Trajna veza',

	// thousands separator - must contain single byte
	',' => ',',
	'0123456789' => '0123456789',
	'Engine' => 'Stroj',
	'Collation' => 'Sravnjivanje',
	'Data Length' => 'Dužina podataka',
	'Index Length' => 'Dužina indeksa',
	'Data Free' => 'Slobodno podataka',
	'Rows' => 'Redova',
	'%d in total' => 'ukupno %d',
	'Analyze' => 'Analiziraj',
	'Optimize' => 'Optimizuj',
	'Check' => 'Provjeri',
	'Repair' => 'Popravi',
	'Truncate' => 'Isprazni',
	'Tables have been truncated.' => 'Tabele su ispražnjene.',
	'Move to other database' => 'Premijesti u drugu bazu podataka',
	'Move' => 'Premijesti',
	'Tables have been moved.' => 'Tabele su premješćene.',
	'Copy' => 'Umnoži',
	'Tables have been copied.' => 'Tabele su umnožene.',

	'Routines' => 'Rutine',
	'Routine has been called, %d row(s) affected.' => array('Pozvana je rutina, %d red je ažuriran.', 'Pozvana je rutina, %d reda su ažurirani.', 'Pozvana je rutina, %d redova je ažurirano.'),
	'Call' => 'Pozovi',
	'Parameter name' => 'Naziv parametra',
	'Create procedure' => 'Formiraj proceduru',
	'Create function' => 'Formiraj funkciju',
	'Routine has been dropped.' => 'Rutina je izbrisana.',
	'Routine has been altered.' => 'Rutina je izmijenjena.',
	'Routine has been created.' => 'Rutina je spašena.',
	'Alter function' => 'Ažuriraj funkciju',
	'Alter procedure' => 'Ažuriraj proceduru',
	'Return type' => 'Povratni tip',

	'Events' => 'Događaji',
	'Event has been dropped.' => 'Događaj je izbrisan.',
	'Event has been altered.' => 'Događaj je izmijenjen.',
	'Event has been created.' => 'Događaj je spašen.',
	'Alter event' => 'Ažuriraj događaj',
	'Create event' => 'Napravi događaj',
	'At given time' => 'U zadato vrijeme',
	'Every' => 'Svaki',
	'Schedule' => 'Raspored',
	'Start' => 'Početak',
	'End' => 'Kraj',
	'On completion preserve' => 'Zadrži po završetku',

	'Tables' => 'Tabele',
	'Tables and views' => 'Tabele i pogledi',
	'Table' => 'Tabela',
	'No tables.' => 'Bez tabela.',
	'Alter table' => 'Ažuriraj tabelu',
	'Create table' => 'Napravi tabelu',
	'Table has been dropped.' => 'Tabela je izbrisana.',
	'Tables have been dropped.' => 'Tabele su izbrisane.',
	'Tables have been optimized.' => 'Tabele su optimizovane.',
	'Table has been altered.' => 'Tabela je izmijenjena.',
	'Table has been created.' => 'Tabela je spašena.',
	'Table name' => 'Naziv tabele',
	'Show structure' => 'Prikaži strukturu',
	'engine' => 'stroj',
	'collation' => 'Sravnjivanje',
	'Column name' => 'Naziv kolumne',
	'Type' => 'Tip',
	'Length' => 'Dužina',
	'Auto Increment' => 'Auto-priraštaj',
	'Options' => 'Opcije',
	'Comment' => 'Komentar',
	'Default values' => 'Podrazumijevane vrijednosti',
	'Drop' => 'Izbriši',
	'Are you sure?' => 'Da li ste sigurni?',
	'Move up' => 'Pomijeri na gore',
	'Move down' => 'Pomijeri na dole',
	'Remove' => 'Ukloni',
	'Maximum number of allowed fields exceeded. Please increase %s.' => 'Premašen je maksimalni broj dozvoljenih polja. Molim uvećajte %s.',

	'Partition by' => 'Podijeli po',
	'Partitions' => 'Podijele',
	'Partition name' => 'Ime podijele',
	'Values' => 'Vrijednosti',

	'View' => 'Pogled',
	'View has been dropped.' => 'Pogled je izbrisan.',
	'View has been altered.' => 'Pogled je izmijenjen.',
	'View has been created.' => 'Pogled je spašen.',
	'Alter view' => 'Ažuriraj pogled',
	'Create view' => 'Napravi pogled',

	'Indexes' => 'Indeksi',
	'Indexes have been altered.' => 'Indeksi su izmijenjeni.',
	'Alter indexes' => 'Ažuriraj indekse',
	'Add next' => 'Dodaj slijedeći',
	'Index Type' => 'Tip indeksa',
	'Column (length)' => 'kolumna (dužina)',

	'Foreign keys' => 'Strani ključevi',
	'Foreign key' => 'Strani ključ',
	'Foreign key has been dropped.' => 'Strani ključ je izbrisan.',
	'Foreign key has been altered.' => 'Strani ključ je izmijenjen.',
	'Foreign key has been created.' => 'Strani ključ je spašen.',
	'Target table' => 'Ciljna tabela',
	'Change' => 'izmijeni',
	'Source' => 'Izvor',
	'Target' => 'Cilj',
	'Add column' => 'Dodaj kolumnu',
	'Alter' => 'Ažuriraj',
	'Add foreign key' => 'Dodaj strani ključ',
	'ON DELETE' => 'ON DELETE (prilikom brisanja)',
	'ON UPDATE' => 'ON UPDATE (prilikom osvežavanja)',
	'Source and target columns must have the same data type, there must be an index on the target columns and referenced data must exist.' => 'Izvorne i ciljne kolumne moraju biti istog tipa, ciljna kolumna mora biti indeksirana i izvorna tabela mora sadržati podatke iz ciljne.',

	'Triggers' => 'Okidači',
	'Add trigger' => 'Dodaj okidač',
	'Trigger has been dropped.' => 'Okidač je izbrisan.',
	'Trigger has been altered.' => 'Okidač je izmijenjen.',
	'Trigger has been created.' => 'Okidač je spašen.',
	'Alter trigger' => 'Ažuriraj okidač',
	'Create trigger' => 'Formiraj okidač',
	'Time' => 'Vrijeme',
	'Event' => 'Događaj',
	'Name' => 'Ime',

	'select' => 'izaberi',
	'Select' => 'Izaberi',
	'Selected' => 'Izabrano',
	'Select data' => 'Izaberi podatke',
	'Functions' => 'Funkcije',
	'Aggregation' => 'Sakupljanje',
	'Search' => 'Pretraga',
	'anywhere' => 'bilo gdje',
	'Search data in tables' => 'Pretraži podatke u tabelama',
	'Sort' => 'Poređaj',
	'descending' => 'opadajuće',
	'Limit' => 'Granica',
	'Text length' => 'Dužina teksta',
	'Action' => 'Akcija',
	'Full table scan' => 'Skreniranje kompletne tabele',
	'Unable to select the table' => 'Ne mogu da izaberem tabelu',
	'No rows.' => 'Bez redova.',
	'%d row(s)' => array('%d red', '%d reda', '%d redova'),
	'Page' => 'Strana',
	'last' => 'poslijednja',
	'Loading' => 'Učitavam',
	'Load more data' => 'Učitavam još podataka',
	'Whole result' => 'Ceo rezultat',
	'%d byte(s)' => array('%d bajt', '%d bajta', '%d bajtova'),

	'Import' => 'Uvoz',
	'%d row(s) have been imported.' => array('%d red je uvežen.', '%d reda su uvežena.', '%d redova je uveženo.'),

	// in-place editing in select
	'Ctrl+click on a value to modify it.' => 'Ctrl+klik na vrijednost za izmijenu.',
	'Use edit link to modify this value.' => 'Koristi vezu za izmijenu ove vrijednosti.',

	// %s can contain auto-increment value
	'Item%s has been inserted.' => 'Stavka %s je spašena.',
	'Item has been deleted.' => 'Stavka je izbrisana.',
	'Item has been updated.' => 'Stavka je izmijenjena.',
	'%d item(s) have been affected.' => array('%d stavka je ažurirana.', '%d stavke su ažurirane.', '%d stavki je ažurirano.'),
	'New item' => 'Nova stavka',
	'original' => 'original',
	// label for value '' in enum data type
	'empty' => 'prazno',
	'edit' => 'izmijeni',
	'Edit' => 'Izmijeni',
	'Insert' => 'Umetni',
	'Save' => 'Sačuvaj',
	'Save and continue edit' => 'Sačuvaj i nastavi uređenje',
	'Save and insert next' => 'Sačuvaj i umijetni slijedeće',
	'Clone' => 'Dupliraj',
	'Delete' => 'Izbriši',
	'Modify' => 'Izmjene',

	'E-mail' => 'El. pošta',
	'From' => 'Od',
	'Subject' => 'Naslov',
	'Attachments' => 'Prilozi',
	'Send' => 'Pošalji',
	'%d e-mail(s) have been sent.' => array('%d poruka el. pošte je poslata.', '%d poruke el. pošte su poslate.', '%d poruka el. pošte je poslato.'),

	// data type descriptions
	'Numbers' => 'Broj',
	'Date and time' => 'Datum i vrijeme',
	'Strings' => 'Tekst',
	'Binary' => 'Binarno',
	'Lists' => 'Liste',
	'Network' => 'Mreža',
	'Geometry' => 'Geometrija',
	'Relations' => 'Odnosi',

	'Editor' => 'Uređivač',
	// date format in Editor: $1 yyyy, $2 yy, $3 mm, $4 m, $5 dd, $6 d
	'$1-$3-$5' => '$5.$3.$1.',
	// hint for date format - use language equivalents for day, month and year shortcuts
	'[yyyy]-mm-dd' => 'dd.mm.[yyyy].',
	// hint for time format - use language equivalents for hour, minute and second shortcuts
	'HH:MM:SS' => 'HH:MM:SS',
	'now' => 'sad',
	'yes' => 'da',
	'no' => 'ne',

	// general SQLite error in create, drop or rename database
	'File exists.' => 'Datoteka već postoji.',
	'Please use one of the extensions %s.' => 'Molim koristite jedan od nastavaka %s.',

	// PostgreSQL and MS SQL schema support
	'Alter schema' => 'Ažuriraj šemu',
	'Create schema' => 'Formiraj šemu',
	'Schema has been dropped.' => 'Šema je izbrisana.',
	'Schema has been created.' => 'Šema je spašena.',
	'Schema has been altered.' => 'Šema je izmijenjena.',
	'Schema' => 'Šema',
	'Invalid schema.' => 'Šema nije ispravna.',

	// PostgreSQL sequences support
	'Sequences' => 'Nizovi',
	'Create sequence' => 'Napravi niz',
	'Sequence has been dropped.' => 'Niz je izbrisan.',
	'Sequence has been created.' => 'Niz je formiran.',
	'Sequence has been altered.' => 'Niz je izmijenjen.',
	'Alter sequence' => 'Ažuriraj niz',

	// PostgreSQL user types support
	'User types' => 'Korisnički tipovi',
	'Create type' => 'Definiši tip',
	'Type has been dropped.' => 'Tip je izbrisan.',
	'Type has been created.' => 'tip je spašen.',
	'Alter type' => 'Ažuriraj tip',

	'Drop %s?' => null,
	'as a regular expression' => null,
	'Materialized view' => null,
	'Vacuum' => null,
	'overwrite' => null,
	'DB' => null,
	'File must be in UTF-8 encoding.' => null,
	'Copy to clipboard' => null,
	'ATTACH queries are not supported.' => null,
	'Warnings' => null,
	'%d / ' => array(),
	'Limit rows' => null,
	'Adminer does not support accessing a database without a password, <a href="https://www.adminer.org/en/password/"%s>more information</a>.' => null,
	'Default value' => null,
	'Too many unsuccessful logins, try again in %d minute(s).' => array(),
	'Master password expired. <a href="https://www.adminer.org/en/extension/"%s>Implement</a> %s method to make it permanent.' => null,
	'The action will be performed after successful login with the same credentials.' => null,
	'Connecting to privileged ports is not allowed.' => null,
	'There is a space in the input password which might be the cause.' => null,
	'If you did not send this request from Adminer then close this page.' => null,
	'You can upload a big SQL file via FTP and import it from server.' => null,
	'Size' => null,
	'Compute' => null,
	'You are offline.' => null,
	'You have no privileges to update this table.' => null,
	'Saving' => null,
	'Unknown error.' => null,
	'Database does not support password.' => null,
	'Disable %s or enable %s or %s extensions.' => null,

	// 'Thanks for using Adminer, consider <a href="https://www.adminer.org/en/donation/">donating</a>.' => null,

	'A newer version of AdminerEvo is available, download it now!' => null,
);
