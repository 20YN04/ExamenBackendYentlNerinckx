# examen laravel basis

## context
Je werkt voor een opleidingscentrum dat cursussen aanbiedt.
Ze willen een eenvoudige webapplicatie om cursussen te beheren.

---

## deel 1 — theorie

### vraag 1
Leg uit aan een "normie" wie waar verantwoordelijk voor is:
- een Model
- een Controller
- een View

Antwoord:
- Model (De Inventaris): De gast die alle koeien en tractors in het systeem bijhoudt en zorgt dat de regels kloppen voor alles wat er opgeslagen wordt.

- Controller (De Boer): De regelaar die luistert naar wat de klant wil, het model aanroept om te checken of er voorraad is en beslist wat er getoond wordt.

- View (De Hoevewinkel): Het kraampje aan de weg waar alles mooi gepresenteerd staat zodat de mensen gemakkelijk kunnen zien wat er te koop is.

---

### vraag 2
Wat is Eloquent (...) en waarom gebruiken we het?
Geef 2 voordelen en 1 nadeel.

Antwoord:
- Wat:Eloquent is een vertaler tussend de code en de database in laravel.
- Waarom: Eloquent maakt het allemaal makkelijker nu moet je alleen maar zeggen: product::all() en dan haalt die alle producten op zonder da ge u ergens druk om moet maken.

- Voordeel 1: Ge bespaart superveel tijd omda ge veel minder fouten maakt in de code en alles veel leesbaarder blijft voor uzelf en anderen.

- Voordeel 2: Het is veel veiliger omdat Eloquent automatisch beschermt tegen hackers die proberen in te breken via uw database-formulieren.

- Nadeel: Het kan soms wat trager worden als je met echt gigantisch veel data tegelijk werkt in plaats van met gewone database-code.

-
---

### vraag 3
Wat gebeurt er wanneer een gebruiker een formulier verstuurt in Laravel?
En welk onderdeel mogen we zeker niet vergeten? (verplicht in laravel)
Beschrijf de flow:
- route
- controller
- validatie
- response/action

Antwoord:

- Route: De route vangt de aanvraag van de gebruiker op en stuurt die direct door naar de juiste functie in u controller.

- Controller: In de controller voert ge de logica uit, zoals het aanspreken van de database of het verwerken van de data uit het formulier.

- Validatie: Ge controleert hier of alle gegevens wel kloppen (zoals een verplicht e-mailadres) zodat er geen foute data in uw systeem geraakt.

- Response: Als alles oké is, stuurt ge de gebruiker een antwoord terug, zoals een bedankpagina of een redirect naar het overzicht.

- Verplicht onderdeel: Ge moogt absoluut de @csrf tag niet vergeten in uw formulier, want anders blokkeert Laravel de aanvraag direct om hackers tegen te houden.

---

### vraag 4
Wat doet de volgende code?

```php
Course::where('active', 1)->orderBy('title')->get();
```
Leg stap voor stap uit EN maak hier ook een raw MYSQL query van!

Antwoord:

- Course::: Ge zegt eerst tegen Laravel dat ge in de tabel van de 'Courses' wilt gaan kijken.

- where('active', 1): Ge geeft aan dat ge enkel de cursussen wilt zien die op 'actief' staan, de rest negeert ge gewoon.

- orderBy('title'): Ge zorgt ervoor dat alles netjes op alfabetische volgorde van de titel wordt gezet zodat het overzichtelijk blijft.

- get(): Dit is de finale stap waar ge effectief tegen de database zegt: Breng die lijst nu maar naar hier.

Raw MySQL 

```sql
SELECT * FROM courses WHERE active = 1 ORDER BY title ASC;
```

_Einde examendeel_
