# Media Block Player
Projekt TIS 2018/2019 Media Block Player


## Online knižnica k aplikácii Media Block Player

http://www.hrebenarm.tk/Projects/MBP/MBPLibrary/
po registrácii je možné priávať a mazať svoje materiály


## Aplikácia Media Block Player

http://www.hrebenarm.tk/Projects/MBP/


## Práca s aplikáciou

### Vytvorenie synchronizačného súboru
V hlavnom menu aplikácie je tlačítko "CREATE YOUR OWN MEDIA". Tu treba nahrať audio súbor a súbor s prepísanou audio nahrávkou ku ktorému sa vytvára synchronizačný súbor. Textový súbor musí byť rozdelený znakom "|" na bloky. K takto definovaným blokom sa bude priraďovať daná čast z audia. Po skončení vytvárania ponukne aplikácia daný synchronizačný súbor stiahnuť.

Ovládanie

- play/pause (k) - spúšta a pozastavuje audio
- backward (j) - posúva audio do zadu o zadaný počet sekúnd
- forward (l) - posúva audio do predu o zadaný počet sekúnd
- play actual block (m) - prehrá aktuálne vytváraný blok
- skip block (s) - označí aktuálny blok za blok ktorý treba preskočiť, teda sa táto časť audia odignoruje
- next block (n) - aktuálny blok sa uloží a presunie sa na vytváranie ďalšieho bloku

### Vybranie materiálov z lokálneho disku
V hlavnom menu aplikácie je tlačítko "CHOOSE MEDIA FROM DISK". Tu treba nahrať trojicu audio súbor, súbor s prepísanou audio nahrávkou a synchronizačný súbor. Paralérny preklad je voliteľný. V nastaveniach si treba vybrať mód výučby a prejsť k samotnému prehrávaniu.

### Vybranie materiálov z online knižnice
V hlavnom menu aplikácie je tlačítko "CHOOSE MEDIA FROM ONLINE LIBRARY". Tu treba zvoliť jazyk, v akom chceme audio nahrávky počúvať. Potom si treba vybrať danú nahrávku, v nastaveniach si vybrať mód výučby a prejsť k samotnému prehrávaniu.

### Prehrávač
Najprv používateľ si môže vybrať z rôznych režimov prehrávania ('First
listening', 'Speaking check', 'Continual echoing', ...). Po vybratí režimu
sa ešte dá paramentre prehrávania nastavovať ručne (Počet opakovaní, smer
prehrávania, ...). 'Speaking check' a 'Pronounciation check' sa používa na
kontrolu výslovanosti a slovnej zásoby preto treba vždy stlačiť kontrolný
button pred prehratím bloku.

Keď existuje a paralelný preklad k lekcie sa dá vybrať že v akom jazyku
to chce používateľ mať. Keď existuje iba jeden paralelný preklad tak to
je automaticky vybratý. Keď neexistuje paralelný preklad tak select box
nie je viditeľný.

Keď je zapnutý zobrazovanie paralelného prekladu tak v hornom riadku je
paralelný preklad orginálneho textu aktuálneho bloku.

Keď je zapnutý zobrazovanie orginálneho textu tak v druhom riadku je text
aktuálneho bloku.

Keď sme v režime 'Speaking check' alebo 'Pronounciation check' tak stredný
button služi na overenia výsledku (vlastne použivateľ sa pokúsi vysloviť
aktualný blok a potom po stlačšní vie overiť jeho schopnosti).

V ostatných režimoch Pause a Play slúži na riadenie prehrávania. Keď
prehrávanie je pozastavený a pustíme to znova tak ten blok sa prehrá od
začiatku.

Tlačidlo 'Back': skočí na predchádzajúcí blok. Keď sa dostane na začiatok
blokov tak prehrávanie zastaví.

Tlačidlo 'Forward': skočí na nasledujúci blok. Keď sa dostane na koniec
blokov tak automaticky sa začne krokovať od začiatku.

### Online knižnica

#### Registrácia
Na hlavnej stránke v hornej navigačnej lište je tlačidlo "REGISTER". To vás po kliknutí presmetuje na stránku s registračným formulárom, kde je potrebné zadať všetky údaje. Po dokončení registrácie budete presmerovaný na stránku prihlásenia

#### Prihlasovanie
Na hlavnej stránke v hornej navigačnej lište je tlačidlo "LOGIN". To vás po kliknutí presmeruje na stránku s prihlasovacím formulárom, kde je potrebné zadať údaje pre overenie. Po úspešnom prihlásení budete presmerovaný na hlavnú stránku na ktorej sa zobrazí uvítacia správa.

#### Pridávanie lekcie do knižnice
Po úspešnom prihlásení do knižnice nájdete v pravom dolnom rohu okna prehliadača okrúhle tlačidlo s ikonou "+", ktoré vás po kliknutí presmeruje na stránku s formulárom pre pridanie novej lekcie. Tu je potrebné vyplniť potrebné informácie o lekcii a to názov, obtiažnosť a pôvodný jazyk. Popis lekcie nie je povinný zadávať. Ďalej je nutné vybrať súbory k lekcii. Povinné súbory sú Zvukový súbor (MEDIA), Prepis zvukového súboru (SCRIPT) v správnom formáte a Synchronizačný súbor (SYNC) vytvorený pomocou našej aplikácie (viď. návod vyššie). Ďalej po stlačení  zeleného okrúhleho tlačidla so symbolom "+" je možné pridávať ľubovoľný počet prekladových súborov (TRANSLATION) v správnom formáte a vybrať jazyk prekladu. Lekciu uložíte kliknutím na tlačidlo "SAVE LECTURE". Budete presmerovaný na uvodnú stránku so zoznamom lekcií, v ktorej ak všetko prebehlo správne nájdete aj vašu novú lekciu.

#### Mazanie lekcie
Po úspešnom prihlásení nájdete v hornej navigačnej lište aplikácie tlačidlo "PROFILE". To vás presmeruje na stránku váško profilu. Pod osobnými informáciami nájdete sekciu "My contributions", v ktorom (ak už máte pridané nejaké lekcie) zoznam lekcií. V každom riadku na pravej strane nájdete červené tlačidlo so symbolom "X". Po jeho kliknutí sa vám zobrazí výzva na potvrdenie akcie. Po kliknutí na tlačidlo "OK" bude lekcia zmazaná a vaša stránka s profilom sa znovu načíta.

## Inštalačná príručka
Aplikácia požaduje server s databázovým systémom a s verziou PHP 5.6 alebo vyššiou.

1. Stiahnite alebo naklonujte si obsah repozitára.
2. Na požadované miesto na serveri umiestnite obsah repozitára tak ako je.
3. Vo vašom databázovom systéme su vytvorte databázu a naimportujte do nej súbor mbp.sql alebo jeho obsah spustite v SQL interpreteri.
4. V priečinku MBPLibrary v súbore db.php je potrebné zmeniť prístupové údaje k vašej databáze.
   $mysqli = new mysqli('localhost', '[login_here]', '[password_here]', '[database_name_here]');
   //$mysqli = new mysqli('localhost', 'hrebenar3', 'gaexe', 'hrebenar3'); //example
5. Aplikácia je pripravená na použite.
