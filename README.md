# 3. Übung - Primzahlberechnung & Logarithmische Funktionen
### Schuljahr 24/25
### Lehrgang 2
### Übungstag 27.11.2024
### Krenn Andy
### Gruppe B

<br>

# Umsetzung

### Primzahl Rechner
Das Programm liest eine Eingabe des Users, mithilfe eines Forms ein. <br>
_number_ <br>
Der Wert wird anschließend per _REQUEST im php Teil aufgenommen und verarbeitet <br>
Berechnet werden alle Primzahlen, bis zur eingegeben Zahl mitfilfe von "_for_" schleifen. Die erste Schleife geht bis zur eingegebenen Zahl und die zweite bis zur Qudratwurzel. Man prüft nur bis zur Quadratwurzel, weil jeder größere Teiler schon durch einen kleineren abgedeckt ist.

Beispiel mit 
𝑛=36

Teilerpaare: 
2×18,3×12,4×9,6×6
2×18,3×12,4×9,6×6.
Ab der Quadratwurzel ($\sqrt{36}$=6) wiederholen sich die Paare nur noch.
Daher reicht es, bis zur Wurzel zu prüfen, um Zeit zu sparen.

<br> <br>
### Logorithmische Funktionen
Das Programm hat einen hardgecodeten Wert _100_ <br>
Es liefert eine visuelle Darstellung der logarithmischen Werte von 1 bis 100, wobei jeder Wert durch Sterne repräsentiert wird, die proportional zum Logarithmus der Zahl skaliert sind. 
Die Ausgabe erzeugt Sterne (*) wiederholt mit str_repeat. Die Anzahl der Wiederholungen wird durch round($log * 10) bestimmt, wobei $log der Logarithmus des aktuellen Wertes von $i ist. <br>
Die Ausgabe sieht so aus:<br>
![Logarithmus.png](./images/logarithmus.png);