# eCloud-Admin

### Beschrijving
​
Projectbeschrijving

In project ga je in twee weken een admin-interface voor je eigen cloud storage systeem maken. Dit project voor je individueel uit.

Deze opdracht gaat over het admindeel. In het vorige project heb je al het gebruikersdeel gebouwd.

Voor de beheerder ga je een dashboard maken voor het cloud storage systeem.
Het gaat over de gegevens van de gebruikers. De beheerder van de cloud storage website wil graag meer inzicht in het gebruik. Er is behoefte aan allerlei informatie, die snel inzichtelijk moet worden. De beheerder wil graag in één oogopslag het antwoord op zijn vragen kunnen zien.

Om in die behoefte te voorzien, ga je een dashboard maken. Op dit dashboard worden cijfers en statistieken getoond. Ook kan er worden doorgeklikt om de gegevens te filteren of in te zoomen. Door selecties mogelijk te maken, krijg je meer informatie. Bijvoorbeeld: Hoe lang worden bestanden gemiddeld bewaard? Dit kun je dan doen voor alle bestandstypen, of voor alleen jpg, png, docx, etc. Om de beheerder tegemoet te komen, maak je een voorstel voor de gegevens die je voor hem inzichtelijk kunt maken. Je maakt een plan van aanpak waarin je laat zien welke vragen je kunt beantwoorden en welke grafieken je zou kunnen maken. Ook maak je een functioneel ontwerp om duidelijk te maken hoe de pagina’s er uitzien (wireframes) en zich tot elkaar verhouden. In de vorm van user stories geef je weer welke grafieken er gemaakt gaan worden.

Na overleg met de opdrachtgever heb je helder in beeld welke grafieken je gaat maken. Vervolgens ga je aan de slag met het realiseren van de applicatie. De beheerder krijgt een login om op het dashboard te komen. Gewone gebruikers kunnen hier niet bij.

 

Het is belangrijk dat de applicatie online staat! 

 

## Doelen

Je maakt een omgeving voor users en voor beheerders.
Je genereert data en zorgt voor een gevulde database.
Je werkt met een grafiekenlibrary en kunt verschillende typen grafieken genereren.
Je kunt een de volledige documentatie schrijven en opleveren.

## Beoordeling

Bij de beoordeling zal worden gelet op wat we in de lessen behandeld hebben.

Gebruik een veilige manier om wachtwoorden op te slaan
Werk volgens het DRY principe: gebruik functies, includes, classes
Benader je database via PDO in een functie of een singleton klasse.
Gebruik een database user met beperkte rechten voor de verbinding.
Zorg voor een afgewerkt product met een goede user interface.
​

## Producten

Projectplan
Doelstelling, activiteiten, organisatie, planning
Functioneel ontwerp
Product backlog, structuur van je applicatie, functionaliteit per pagina. Maak gebruik van wireframes / mockups en user stories om de functionaliteit te beschrijven.
Technisch ontwerp
Gebruikte libraries / frameworks, codeafspraken, ER-diagram, class diagram, activitiy diagram
Applicatie
Website met PHP, HTML, CSS, etc
Database
Structuur en data
Testplan en testresultaten
Programma van eisen

## Functionele Eisen 

De beheerder logt op dezelfde manier in als de gebruiker, echter heeft deze toegang tot het dashboard met statistieken over het gebruik van de cloud dienst. 
Op het dashboard staat het aantal gebruikers, de top 10 gebruikers die de meeste schijfruimte gebruiken en een link of preview naar de grafieken.
Maak grafieken voor minstens vijf verschillende situaties. Gebruik ook verschillende grafiektypen (cirkeldiagram, staafdiagram, etc.). Welke grafieken je precies maakt, overleg je met de opdrachtgever.
Technische Eisen 

De cloud service moet geprogrammeerd worden in PHP. 
Voor de layout mag een CSS framework gebruikt worden, zoals Bootstrap. 
Voor de grafieken mag een externe bibliotheek worden gebruikt.
Het mag op geen enkele manier mogelijk zijn om naar pagina’s te navigeren waar de gebruiker geen rechten voor heeft. 
Er mag geen enkele vorm van SQL injection mogelijk zijn. 
Er wordt in de code gebruik gemaakt van duidelijke comments, waarmee duidelijk wordt wat het codeblok doet.  
Voor het communiceren met de database moet een PDO verbinding gebruikt worden, in een functie of klasse. 
Randvoorwaarden 

De webapplicatie moet online staan bij de oplevering. 
De opdrachtgever is tijdens het proces beschikbaar voor feedback en bijsturing van het project. 
De database moet voldoende gegevens bevatten: > 100 users, > 500 files, > 200 shares
De website ondergaat een uitgebreide acceptatietest gebaseerd op de opgestelde eisen. 
