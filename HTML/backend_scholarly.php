<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <link href="../StyleSheets/doc.css" rel="stylesheet">
    <title>Backend - Documentație</title>
</head>

<body>
    <header>
        <h1>MAss (Make-up Assistant)</h1>
        <div role="contentinfo">
            <section typeof="sa:AuthorsList">
                <h2>Autori</h2>
                <ul>
                    <li>Pădurariu Andreea</li>
                    <li>Stoica Delia-Sabina</li>
                    <li>Vasilache Tudor</li>
                </ul>
            </section>
        </div>
    </header>
    <section>
        <h2>Enuntul problemei:</h2>
        <p>"Sa se realizeze o aplicatie Web ce ofera sfaturi privitoare la realizarea machiajului in functie de varsta, ten, ocazie, moment al zilei etc. pe baza diverselor produse specifice (e.g., creme, fonduri de ten, rujuri, creioane dermatografe) oferite de diverse companii. Se vor lua in consideratie preferintele utilizatorilor. Se va genera, de asemenea, un clasament – disponibil in formatele HTML, RSS si PDF – al celor mai populare produse pe categorii de varsta, gen, pozitie sociala si altele."</p>
    </section>
    <section>
        <h2>Tehnologii folosite:</h2>
        <ol>
            <li>PHP - interogarea bazei de date + alte funcții</li>
            <li>MySQL ca bază de date ce stochează: produse, sfaturi, preferințele userului, tabele de legătură între preferințe și produse + sfaturi, utilizatori. </li>
        </ol>
        
    </section>
    <section>
        <h2>
            Descrierea aplicației
        </h2>
        <p>MAss este un tool creat pentru a veni în ajutorul persoanelor care au nevoie de recomandări de produse și sfaturi potrivite în materie de make-up. Site-ul pune la dispoziție utilizatorului două formulare care cuprind atât întrebări generale (tell us more about you), cât și întrebări specifice (Advice -> Makeup) pe care aplicația le folosește pentru a stabili caracteristicile și preferințele unui utilizator. Odată completate aceste formulare, programul alege din baza de date produsele care se potrivesc specificațiilor și le ”recomandă” unui utilizator, alături de sfatul aferent utilizării corecte/ eficiente a fiecărui produs.</p>

        <p>Un utilizator poate beneficia de sfaturile și recomandările aplicației doar dacă are un cont în baza de date și se loghează cu acesta. Fără a se loga, acesta poate accesa doar pagina cu produse și clasamente.</p>

        <p>Produsele și sfaturile pot fi adăugate și șterse de către Admin, de pe pagina destinată administrării site-ului - ADMIN. Pentru ca adminul să aibă acces la această pagină, el trebuie să se logheze în prealabil folosind contul de admin, pe pagina standard de login.</p>
        <ul>
            <li>Paginile disponibile utilizatorului obisnuit:
                <ol>
                    <li>Home - unde orice vizitator al site-ului poate vedea cele mai noi produse apărute pe site, precum și câteva din produsele consacrate de pe site.</li>
                    <li>About Us - unde sunt prezentați membrii echipei.</li>
                    <li>Products - unde pot fi vizualizate produsele (pe categorii) precum și câteva clasamente ale acestor produse, cum ar fi: ”Most Popular”, ”Newest Products”, ”Asc Price”</li>
                    <li>Advice -> MakeUp - unde se găsesc câteva întrebări referitoare la preferințele utilizatorului cu privire la produse de makeup, precum și la contextul pentru care el are nevoie de sfaturi.</li>
                    <li>Tell Us More About You - unde se găsesc întrebări cu privire la înfățișarea utilizatorului, întrebări la care el poate răspunde o singură dată, urmând ca răspunsurile să fie salvate în baza de date (cu posibiliatea de update oricând dorește userul).</li>
                    <li>Login - unde atât un user obișnuit, cât și adminul se pot loga.</li>
                    <li>Register - unde un user își poate crea un cont.</li>
                </ol>
            </li>
            
                    <li>Admin - unde se găsesc paginile ”Products”, ”Product Tags”, ”Tag Categories”, ”Product Categories”, ”Advice”; pe fiecare dintre ele, adminul poate insera/ șterge elemente din baza de date(produse, sfaturi, taguri etc.).</li>
               
        </ul>
    </section>
    <section>
        <h2>Cine ce-a făcut:</h2>
        <p>
            Taskurile au fost împărțite în modul următor:
        <ul>
            <li>
                Pădurariu Andreea
                <ol>
                    <li>Register/Login user/admin</li>
                    <li>Pagina adminului: upload de produse, sfaturi, taguri etc.</li>
                    <li>Afișarea produselor nou introduse (home + products)</li>
                </ol>
            </li>
            <li>
                Stoica Sabina-Delia
                <ol>
                    <li>Implementarea opțiunii de feedback</li>
                    <li>Asocierea preferințelor cu produse și sfauturi => generarea de sfaturi</li>
                    <li>Generarea de clasamente (feedback)</li>
                </ol>
            </li>
            <li>
                Vasilache Tudor
                <ol>
                    <li>Construirea chestionarelor (tumay + makeup)</li>
                    <li>Inserarea răspunsurilor utilizatorilor în baza de date</li>
                    <li>Organizarea produselor pe categorii</li>
                    <li>Generarea de clasamente (preț, dată)</li>
                    <li>Exportul clasamentelor în format HTML, RSS și PDF</li>

                </ol>
            </li>
        </ul>
    </section>

    <section>
        
        <p>
            În realitate, fiecare membru al echipei a lucrat la următoarele componente:
            (aici urmează să completeze fiecare dintre noi cu ce a lucrat exact; în mare, se păstrează taskurile atribuite inițial, numai că trebuie detaliate, iar dacă cineva a lucrat și la alte taskuri ale colegilor sau nu și-a terminat (singur) taskul, ar putea menționa asta în categoria asta; nu știu dacă este o idee bună, dar m-am gândit că în felul ăsta avem și taskurile organizate în mare, dar avem și posibilitatea să detaliem și să explicăm ce a făcut fiecare în realitateS)
        <ul>
            <li>
                Pădurariu Andreea
                <ol>
                    <li>Register/Login user/admin</li>
                    <li>Pagina adminului: upload de produse, sfaturi, taguri etc.</li>
                    <li>Afișarea produselor nou introduse (home + products)</li>
                </ol>
            </li>
            <li>
                Stoica Sabina-Delia
                <ol>
                    <li>Implementarea opțiunii de feedback</li>
                    <li>Asocierea preferințelor cu produse și sfauturi => generarea de sfaturi</li>
                    <li>Generarea de clasamente (feedback)</li>
                </ol>
            </li>
            <li>
                Vasilache Tudor
                <ol>
                    <li>Construirea chestionarelor (tumay + makeup)</li>
                    <li>Inserarea răspunsurilor utilizatorilor în baza de date</li>
                    <li>Organizarea produselor pe categorii</li>
                    <li>Generarea de clasamente (preț, dată)</li>
                    <li>Exportul clasamentelor în format HTML, RSS și PDF</li>

                </ol>
            </li>
        </ul>
    </section>
    <section>
        <h2>Sistemul de management al codului sursa</h2>
        <p>
            
        </p>

    </section>
</body>

</html>