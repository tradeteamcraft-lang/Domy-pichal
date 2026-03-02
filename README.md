# Domy-Pichal – strona wizytówkowa

Minimalistyczna, szybka strona WWW przygotowana pod SEO Google dla firmy oferującej:

- domy szkieletowe,
- domy z bali,
- altany i tarasy drewniane,
- garaże drewniane, wiaty i inne konstrukcje z drewna.

## Jak uruchomić stronę

Nic nie trzeba instalować.

1. Otwórz plik `index.html` w przeglądarce (np. przeciągając go na okno przeglądarki).
2. Po publikacji na hostingu plik `index.html` powinien leżeć w katalogu głównym domeny.

## Jak edytować treści

- Treści główne znajdują się w pliku `index.html` w sekcjach:
  - `#hero` – nagłówek, główne hasło i przyciski CTA,
  - `#oferta` – opis oferty (domy szkieletowe, domy z bali, altany, garaże),
  - `#o-nas` – informacje o firmie,
  - `#proces` – etapy współpracy/budowy,
  - `#realizacje` – miejsce na zdjęcia wykonanych realizacji,
  - `#faq` – najczęstsze pytania,
  - `#kontakt` – formularz i dane kontaktowe.
- Wygląd strony jest w `styles.css`.

## Wskazówki SEO (do uzupełnienia pod konkretną lokalizację)

1. **Tytuł i opis**  
   W `<head>` zmień:
   - `<title>` – dodaj nazwę miejscowości / regionu, np. „Domy-Pichal – domy szkieletowe i z bali – Małopolska”.
   - `<meta name="description">` – jedno zwięzłe zdanie z najważniejszymi frazami i lokalizacją.

2. **Lokalne słowa kluczowe**  
   W tekstach (nagłówki H1–H3 i akapity) delikatnie dodaj:
   - nazwy miast / powiatów, gdzie najczęściej realizowane są zlecenia,
   - frazy typu: „budowa domu szkieletowego [miasto]”, „dom z bali [region]”.

3. **Realizacje – zdjęcia**  
   - Zastąp obecne „placeholdery” prawdziwymi zdjęciami realizacji.
   - Każde zdjęcie nazwij po SEO, np. `dom-szkieletowy-krakow.jpg`.
   - Dodaj opis w `alt`, np. „Dom szkieletowy 120 m2, Kraków, Domy-Pichal”.

4. **Kontakt i dane firmy**  
   W sekcji `#kontakt` uzupełnij:
   - adres,
   - telefon,
   - e-mail.

   Dzięki temu Google lepiej powiąże stronę z konkretnym obszarem.

5. **Szybkość strony**  
   Strona jest lekka (czysty HTML + CSS). Pilnuj, aby:
   - zdjęcia były skompresowane i nie za duże,
   - nie dodawać ciężkich skryptów i zbędnych wtyczek.

Po wprowadzeniu zmian możesz przetestować stronę w:
- Google PageSpeed Insights – wydajność i mobile,
- Google Search Console – indeksowanie i ewentualne błędy.
