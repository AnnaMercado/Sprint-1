# Sprint-1

📄Descripció
Exercicis per integrar les bases de PHP, CSS i HTML.


💻Tecnologies Utilitzades
Php.



❗❗❗Actualitzacions d'aquesta versio:
            -Correció Nivell 1 - Tema 7.




Proces log:

____________________
            -Finalitzacion Nivell 1 - Tema 6: 
                Entrega del exercicis 1, 2 i 3.
            -Correcció exercici 3 - Tema 3: 
                S'ha editat el nom de la funció de forma que s'anomeni a partir d'un verb i no un sustantiu. 
_______________
            -Finalitzacion Nivell 1 - Tema 7: 
                Entrega del exercicis 1 i 2.
          
_______________
            -Finalitzacion Nivell 1 - Tema 1: 
                Entrega del exercicis 1, 2 i 3 (pagina versió escriptori, tablet i ordinador).
            -Correcció exercici 3 - Tema 3: 
                S'ha afegit un return false al bucle si no troba la lletra en la paraula i a més a més s'ha eliminat la variable $coincideixen, ja que al tener dos return no era necesari guardar el valor del Boolean.
___________________
            -Correcció exercici 3 - Tema 3: 
                S'ha afegit un break al bucle un cop veu que la paraula en la que està no conté la lletra que ha de buscar.
            -Correció exercici 1 - Tema 4: 
                S'ha canviat el >= per un =, eliminant així el bug que es produia quan el salari introduit era 6000.
            -Correció exercici 2 - -Tema 4: 
                S'han eliminat els contructors ja que les clases filles no tenen atributs propis i per aixó no eran necesaris.  




**Tema 0 - Git i Github**🌟
    -Nivell 1:
        -Exercici 1: ✅
            Crea el teu propi compte en Github. Un cop creat el compte, crea un repositori. Decideix tu mateix/a com voldràs organitzar-te. Nosaltres recomanem, o bé la creació d’un repositori per activitat entregable o bé un repositori per Sprint.
        -Exercici 2:✅
            Clona el repositori en el teu ordinador, a la carpeta on treballaràs els diferents exercicis de l’especialitat.  Entrega tant el link del teu repositori Github com una captura de pantalla que mostri com l’has clonat al teu l'ordinador.
    -Nivell 2: 
        -Exercici 1: ✅
            Crea fitxers de prova (amb el contingut que vulguis) per practicar amb les versions de GIT en el teu ordinador. Versiona diferents canvis. Entrega una captura de pantalla.
    -Nivell 3: 
        -Exercici 1: ✅
            Puja les versions que has generat al teu repositori Github. Amb el link de l’exercici 1 del Nivell 1 quedarà clar si ho has fet correctament.
________________________________________________________________________________________________________________________________________

**Tema 1 - HTML i CSS**
    -Nivell 1: 
        -Exercici 1: ✅
            A partir del wireframe que t'aportem en format .png, hauràs de fer la maquetació en format escriptori. És indiferent els colors escollits, però sí que és molt important que facis l'estructura de caixes que t'indiquem.
________________________________________________________________________________________________________________________________________

**Tema 2 - PHP basic**
    -Nivel 1:✅
        -Exercici 1: ✅
            Defineix una variable de cada tipus: integer, double, string i boolean. Imprimeix-les per pantalla.
            Després crea una constant que inclogui el teu nom i mostra-ho en format títol per pantalla.
        -Exercici 2: ✅
            Imprimeix per pantalla "Hello, World!" utilitzant una variable. En acabat:
            Transforma tots els caràcters de l'string a majúscules i imprimeix en pantalla.
            Imprimeix per pantalla la mida (longitud) de la variable.
            Imprimeix per pantalla l'string en ordre invers de caràcters.
            Crea una nova variable amb el contingut “Aquest és el curs de PHP” i imprimeix per pantalla la concatenació de tots dos strings.
        -Exercici 3:✅
            a) Declara dues variables X i Y de tipus int, dues variables N i M de tipus double i assigna a cadascuna un valor. A continuació, mostra per pantalla per a X i Y:
                El valor de cada variable.
                La suma.
                La resta.
                El producte.
                El mòdul.
            Per N i M realitzaràs el mateix.Per a totes les variables (X, Y, N, M):
                El doble de cada variable.
                La suma de totes les variables.
                El producte de totes les variables.

            b) Crea una funció Calculadora que entri dos nombres per paràmetre, i en un tercer paràmetre et permeti fer la suma, la resta, la multiplicació o la divisió dels dos nombres.
        -Exercici 4:✅
            Fes un programa que implementi una funció on es compti fins a un nombre determinat. Si no s’inclou un nombre determinat, el nombre haurà de tenir un valor per defecte igual a 10. A més, aquesta funció ha de tenir un segon paràmetre que indiqui de quant a quant es compta(D'1 en 1, de 2 en 2…). El compte s’ha de mostrar per pantalla pas per pas.
        -Exercici 5: ✅
            Escriure una funció per verificar el grau d'un/a estudiant d'acord amb la nota.
            Condicions:
                Si la nota és 60% o més, el grau hauria de ser Primera Divisió.
                Si la nota està entre 45% i 59%, el grau hauria de ser Segona Divisió.
                Si la nota està entre 33% to 44%, el grau hauria de ser Tercera Divisió.
                Si la nota és menor a 33%, l'estudiant reprovarà.
        -Exercici 6:✅
            Charlie em va mossegar el dit! Charlie et mossegarà el dit exactament el 50% del temps.
            Escriu La funció isBitten () que retorna TRUE amb un 50% de probabilitat i FALSE en cas contrari.
________________________________________________________________________________________________________________________________________

**Tema 3 - Arrays**
    -Nivell 1: 
        -Exercici 1: ✅
            Crea un array, afegeix-li 5 nombres enters i després mostrals per pantalla d’un en un.
        -Exercici 2:✅
            $X = array (10, 20, 30, 40, 50,60);
            Mostrar per pantalla la mida de l’array anterior i posteriorment elimina un element de l’array anterior. Després d'eliminar l'element, les claus senceres han de ser normalitzades(s’han de reorganitzar els seus índexs). Mostra per última vegada la mida de l’array.
        -Exercici 3: ✅
            Crea una funció que rebi com a paràmetres un array de paraules i un caràcter. La funció ens retorna true si totes les paraules de l’array tenen el caràcter passat com a segon paràmetre.
            Per exemple:
            Si tenim [“hola”, “Php”, “Html”] retornarà true si preguntem per “h” però fals si preguntem per “l”.
        -Exercici 4: ✅
            Fes un array associatiu que representi informació de tu mateix/a. En concret ha d’incloure:
                nom
                edat
                email
                menjar favorit
    -Nivell 2: 
________________________________________________________________________________________________________________________________________

**Tema 4 -P00**
    -Nivell 1:
        -Exercici 1:✅
            Crea una classe Employee, defineix com a atributs el seu nom i sou. Definir un mètode initialize que rebi com a paràmetres el nom i sou. Plantejar un segon mètode print que imprimeixi el nom i un missatge si ha de pagar o no impostos (si el sou supera 6000, paga impostos).
        -Exercici 2:✅
            Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea de la forma area().
________________________________________________________________________________________________________________________________________

**Tema 5 - POO2**🌟
    -Nivell 1: 
        -Exercici 1: ✅
            Necessitem crear un tipus de dades que representi un animal. Els animals tenen un nom, ara bé, no és el mateix el so de la “parla” d’un gos, que el d’un gat. Per tant, necessitem crear altres tipus de dades que ens ajudin a programar aquests comportaments. Bàsicament, volem un mètode makeSound() que mostri un missatge diferent si es tracta d’un gos (per exemple,“Bup, bup!”) o un gat (per exemple “Meu!”).
    -Nivell 2:
        -Exercici 1: ✅
             Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea de la forma area().
    -Nivell 3:
        -Exercici 1:✅
            Seguint l’exercici anterior, imagina com ampliaries l’estructura que has creat per representar un Cercle i el seu corresponent càlcul d’àrea.
________________________________________________________________________________________________________________________________________

**Tema 6 - PHP Avançat**
    -Nivell 1: ✅
        -Exercici 1:
            Crea un formulari HTML amb els camps que vulguis (almenys un nom o username). El formulari ha de tenir com a action un document PHP. El codi d’aquest document PHP haurà de mostrar els valors dels diferents camps del formulari mitjançant variables superglobals. Enregistra a més, alguns d’aquests valors dins de variables de sessió.
        -Exercici 2:
            Fes un programa que faci servir almenys un parell de constants màgiques.
        -Exercici 3:
            Sobreescriu alguna de les lògiques d’entre tots els mètodes màgics que hi ha (que no sigui __construct)
________________________________________________________________________________________________________________________________________

**Tema 7 - Testing**
    -Nivell 1:🆕
        -Exercici 1:
        Donada la classe NumberChecker programa els tests unitaris que facin falta per certificar que el codi font de la classe fa el que ha de fer.
             -> classe NumberChecker
    -Exercici 2:
        Practiquem una mica de TDD. Recorda l’exercici 5 del nivell de PHP Bàsics i pensa tests que podries realitzar per provar el seu correcte funcionament. Programa’ls i després ves realitzant el programa a testejar pas a pas segons valides els tests prèviament creats.
________________________________________________________________________________________________________________________________________










