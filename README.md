1. Kas ir API?
 (Application programming interface) Lietojumprogrammas saskarne ir iepriekš definētu klašu, procedūru, funkciju, struktūru un konstanšu kopums, kas tiek pasniegts kā pielikums, kuru iespējams izmantot ārējiem programmatūras produktiem. Izmanto programmētāji, lai rakstītu dažādus programmu pielikumus.

2. Kā deklarēt mainīgo PHP valodā?
PHP valodā mainīgo var deklarēt, izmantojot dollāra simbolu, kam seko mainīgā nosaukums. Mainīgajiem PHP nav nepieciešams iepriekš definēt tipu, jo PHP ir dinamiski tipizēta valoda. Piemēri:

$Mainigais = "Sveiki, PHP!";
$skaitlis = 42;

3. Kādu arhitektūru izmanto Laravel, paskaidro kā tā strādā:
Laravel izmanto Model-View-Controller (MVC) arhitektūru. 
Šī arhitektūra sadala lietojumprogrammas struktūru trīs galvenās sastāvdaļās:
1)	Model (Modelis): Attēlo dati un biznesa loģiku. Modelis pārvalda datu iegūšanu un saglabāšanu datu bāzē.
2)	View (Skats): Attēlo informāciju lietotājam un nodrošina lietotāja saskarni. Skats atbild par datu attēlošanu un prezentāciju.
3)	Controller (Vadītājs): Apstrādā lietotāja ievadi, sasaista to ar Modeli un nosūta atbildei uz Skatu. Vadītājs kontrolē lietojumprogrammas darbību.Laravel iebūvē daudzas funkcijas, lai atvieglotu darbu ar datu bāzēm, maršrutēšanu, sesijām, drošību un citiem aspektiem. Tas izmanto Eloquent ORM (Object-Relational Mapping) datu bāzu piekļuves veidam, Blade skatu dzinēju, un Artisan komandu rindu lietojumprogrammu izstrādei.

4. Kas ir ORM, kāpēc to izmanto tīra SQL vietā?
ORM (Object-Relational Mapping) ir tehnika, kas attēlo datu bāzes datus kā objektus programmatūrā. To izmanto, lai vienkāršotu datu manipulāciju un nodrošinātu objektu orientētu pieeju datiem. Izmantojot ORM, var veikt datu bāzes darbības, izmantojot objektu īpašības, samazinot nepieciešamību rakstīt sarežģītus SQL vaicājumus un uzlabojot kodu ērtību un drošību.

5. Uzraksti Eloquent ORM pieprasījumu modelim User, kur nepieciešams iegūt visus lietotājus kuriem reitings ir lielāks par 4

$users = User::where('rating', '>', 4)->get();

