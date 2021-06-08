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
        <h2>Împărțirea taskurilor:</h2>
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
                    <ul>
                        <li>Register user:</li>
                        <p>Pentru partea de register al unui user, am construit două funcții (registerController.php):</p>
                        <p>- checkIfExists(), care verifică dacă usernameul și emailul introduse de utilizator sunt în baza de date</p>
                        <p>- registerUser(), care adaugă în tabelul ”user” o nouă intrare cuprinzând usernameul, emailul, parola și rankul (=user) utilizatorului</p>

                        <li>Login user/admin:</li>
                        <p>Pentru partea de login al unui user (admin), în fișierul loginController.php am făcut următoarele:</p>
                        <p>- am interogat baza de date și am selectat acele linii care aveau ca valori usernameul și parola introduse</p>
                        <p>- dacă numărul de linii selectate este mai mare ca 0, atunci utilizatorul este logat și are acces la formulare</p>
                        <p>- totodată, am reținut id-ul, usernameul și rank-ul (după logare, un admin poate accesa pagina ”ADMIN” doar dacă rank-ul asociat este ”admin”) </p>
                    
                    </ul>


                    <li>Pagina adminului: upload de produse, sfaturi, taguri etc.</li>

                    <ul>
                        <li>Products:</li>
                        <p>În cadrul paginii ”Products”, adminul are următoarele opțiuni:</p>
                        <p>- poate încărca un nou produs: prin intermediul funcției createProduct() se poate adăuga un produs nou în tabela ”products”, doar dacă nu există deja un produs cu același nume în aceeași categorie; tot aici se folosește funcția setProductTags() care adaugă tagurile din câmpul ”Tags” în tabela ”productTags”</p>
                        <p>- poate edita un produs: folosind funcția updateProduct() se face un update asupra liniei din tabela ”products” care are același id cu produsul selectat; tot aici se face un update cu noile taguri selectate și asupra tabelei ”productTags”</p>
                        <p>- poate șterge un produs: folosind funcția uremoveProduct() se face linia din tabela ”products” care are același id cu produsul care a fost selectat pentru ștergere; tot aici se șterg și tagurile aferente produsului din tabela ”productTags”</p>



                        <li>Product tags:</li>
                        <p>În cadrul paginii ”Product Tags”, adminul poate face următoarele acțiuni:</p>
                        <p>- poate adăuga noi taguri (asociate răspunsurilor la întrebările din formulare), pe care le poate asocia unei categorii de taguri; pentru asta se folosește funcția createTag() care extrage tagurile din câmpul în care le scrie utilizatorul și insertTag() care inserează tagurile în tabelul ”tagData”</p>
                        <p>- poate șterge un tag într-o manieră similară ștergerii de produse</p>
                      

                        <li>Tag categories:</li>
                        <p>În cadrul paginii ”Tag Categories”, adminul poate face următoarele acțiuni:</p>
                        <p>- poate adăuga noi categorii de taguri (asociate întrebărilor din formulare), pe care le poate asocia unui părinte (nu am folosit această opțiune); pentru asta se folosește funcția createTagCategory() care inserează o nouă categorie de taguri în tabela ”tagCategories”</p>
                        <p>- poate șterge o categorie de taguri într-o manieră similară ștergerii de produse</p>


                        <li>Tag categories:</li>
                        <p>În cadrul paginii ”Product Categories”, adminul are cam aceleași opțiuni:</p>
                        <p>- poate adăuga noi categorii de produse, pe care le poate asocia unui părinte (în cazul acesta, dacă o categorie se numește ”Foundation”, ea are ca părinte categoria ”Face”, care are la rândul ei ca părinte categoria ”Makeup”); pentru asta se folosește funcția createProductCategory() care inserează în tabela ”productCategories” o nouă categorie de produse</p>
                        <p>- poate șterge o categorie de produse într-o manieră similară ștergerii de produse</p>


                        <li>Advices:</li>
                        <p>În cele din urmă, în cadrul paginii ”Advice”, adminul poate face următoarele lucruri:</p>
                        <p>- poate adăuga un nou sfat pe care trebuie să-l asocieze unei categorii de prodse; pentru asta, se folosește funcția createAdvice() care inserează în tabela ”adviceData” un nou sfat și categoria din care face el parte</p>
                        <p>- poate șterge un sfat într-o manieră similară ștergerii de produse</p>
                    
                    </ul>



                    <li>Afișarea produselor nou introduse (home.php)</li>
                    <ul>
                        <li>Pe pagina de home sunt afișate cele mai noi produse încărcate de admin (produsele din ultima lună); pentru asta, pe pagina home.php se folosește funcția retrieveMonthlyProducts() care selectează din tabela ”products” acele produse care au fost încărcate în luna curentă.</li>
                    </ul>
                </ol>
            </li>
            <br><br>
            <li>
                Stoica Sabina-Delia
                <ol>
                    <li>Implementarea opțiunii de feedback</li>
                    <li>Asocierea preferințelor cu produse și sfauturi => generarea de sfaturi</li>
                    <li>Generarea de clasamente (feedback)</li>
                </ol>
            </li>
            <br><br>
            <li>
                Vasilache Tudor
                <ol>
                    <li>Construirea chestionarelor (tumay + makeup)</li>
                        <p> În cadrul acestui task, am construit 2 formulare cu ajutorul cărora utilizatorii pot să își înregistreze trăsăturile faciale și 
                        preferințele în materie de produse de make-up și skin-care. Acestea funcționează prin preluare raspunsurilor de la utilizatori (care
                        vin sub formă unor ID-uri ale unor tag) și care mai tarziu sunt introduse în baza de date si recunoscute după un număr de interogari SQL. </p>
                    <li>Inserarea răspunsurilor utilizatorilor în baza de date</li>
                    <li>Organizarea produselor pe categorii</li>
                        <p>În cadrul paginii products.php se pot vedea toate produsele de pe site-ul nostru. În prima parte a paginii, există butoanele ce împart produsele
                        în categorii. Cu ajutorul acestor butoane, se apelează o funcție ce folosește AJAX, care la rândul ei afișează ca raspuns informațiile trimise de catre 
                        pagina diplayCategories.php.</p>
                    <li>Generarea de clasamente (preț, dată)</li>
                        <p>Aceleași tehnologii ca la afișarea categoriilor se folosesc și pentru a afișare clasamantele.</p>
                    <li>Exportul clasamentelor în format HTML, PDF</li>
                        <p>Pentru a exporta clasamantele în format PDF am folosit libraria mpdf. Utilizatorul are sub butoanele clasamentelor 2 meniuri tip dropdown
                        în cadrul cărora poate alege ce clasament vrea să exporteze și în ce format.</p>
                    <li>Altele:</li>
                        <ul>
                            <li>integrarea codului colegilor în proiectul principal;</li>
                            <li>construirea tabelelor în baza de date;</li>
                            <li>bug fixies;</li>
                            <li>creare de fișiere ajutătoare (navbarLogedIn.php, after_register.php etc.);</li>
                            <li>testarea codului</li>
                        </ul>
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