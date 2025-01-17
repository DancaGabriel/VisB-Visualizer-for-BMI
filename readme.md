<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <title>VisB (Visualizer for BMI)</title>
</head>
<body>
<article>
    <header>
        <h1>VisB (Visualizer for BMI)</h1>
    </header>
    <h2>Cuprins</h2>
    <ul>
        <li><a href="#authors">Autori</a></li>
        <li><a href="#introduction">1. Introducere</a>
            <ul>
                <li><a href="#introduction-purpose">1.1 Scop</a></li>
                <li><a href="#conventions">1.2 Convenție de scriere</a></li>
                <li><a href="#audience">1.3 Publicul țintă</a></li>
                <li><a href="#product-scope">1.4 Scopul produsului</a></li>
                <li><a href="#references">1.5 Referințe</a></li>
            </ul>
        </li>
        <li><a href="#overall">2. Descriere Generală</a>
            <ul>
                <li><a href="#product-perspective">2.1 Perspectiva produsului</a></li>
                <li><a href="#product-functions">2.2 Funcțiile produsului</a></li>
                <li><a href="#users">2.3 Clase și caracteristici ale utilizatorilor</a></li>
                <li><a href="#operating-environment">2.4 Mediul de operare</a></li>
                <li><a href="#documentation">2.5 Documentația pentru utilizator</a></li>
            </ul>
        </li>
        <li><a href="#external">3. Interfețele aplicației </a>
            <ul>
                <li><a href="#user-interface">3.1 Interfața utilizatorului </a>
                    <ul>
                        <li><a href="#nav-bar">3.1.1 Bara de navigație </a></li>
                        <li><a href="#home-page">3.1.2 Pagina de acasă </a></li>
                        <li><a href="#learning">3.1.3 Pagina de statistică </a></li>
                        <li><a href="#rules">3.1.4 Pagina de comparare </a></li>
                        <li><a href="#signs">3.1.5 Pagina de vizualizare </a></li>
                        <li><a href="#error400">3.1.6 Pagina administratorului </a></li>
                    </ul>
                </li>
                <li><a href="#hardware-interface">3.2 Interfața Hardware </a></li>
                <li><a href="#software-interface">3.3 Interfața Software</a></li>
                <li><a href="#communication-interface">3.4 Interfața de comunicare</a></li>
            </ul>
        </li>
        <li><a href="#non-functional">4. Funcționalități pentru protecție și securitate</a>
            <ul>
                <li><a href="#safety">4.1 Protecția datelor</a></li>
                <li><a href="#software-attributes">4.2 Calitățile Software </a></li>
            </ul>
        </li>
    </ul>
    <div role="contentinfo">
        <section id="authors" typeof="sa:AuthorsList">
            <h2>Autori</h2>
            <ul>
                <li property="schema:author" typeof="sa:ContributorRole">
                    <span typeof="schema:Person">
                        <meta content="Gabriel" property="schema:givenName">
                        <meta content="Cristian" property="schema:additionalName">
                        <meta content="Balcan" property="schema:familyName">
                        <span property="schema:name">Dancă Gabriel</span>
                    </span>
                    <ul>
                        <li property="schema:roleContactPoint" typeof="schema:ContactPoint">
                            <a href="mailto:danca.gabriel@outlook.com" property="schema:email">danca.gabriel@outlook.com</a>
                        </li>
                    </ul>
                </li>
                <li property="schema:author" typeof="sa:ContributorRole">
                    <span typeof="schema:Person">
                        <meta content="Daria" property="schema:givenName">
                        <meta content="Ștefania" property="schema:additionalName">
                        <meta content="Ilisei" property="schema:familyName">
                        <span property="schema:name">Ilisei Daria-Ștefania</span>
                    </span>
                    <ul>
                        <li property="schema:roleContactPoint" typeof="schema:ContactPoint">
                            <a href="mailto:iliseidaria@yahoo.com" property="schema:email">iliseidaria@yahoo.com</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </section>
    </div>
    <section id="introduction">
        <h3>1. Introducere</h3>
        <section id="introduction-purpose">
            <h4>1.1 Scop</h4>
            <p>VisB (Visualizer for BMI) este o aplicație web dezvoltată sub forma unui proiect în cadrul materiei Tehnologii Web de la Facultatea de Informatică a Universității Alexandru Ioan Cuza, Iași. Scopul acestui document este de a prezenta o descriere detaliată a funcționalităților și de a specifica cerințele aplicației web. Aplicația va oferi utilizatorilor posibilitatea de a analiza și compara datele privind indicele de masă corporală, precum și de a genera și exporta statistici, comparații și vizualizări în formatele CSV, WebP și SVG.</p>
        </section>
        <section id="conventions">
            <h4>1.2 Convenția documentului</h4>
            <ul>
                <li>Acest document urmează șablonul de documentație a cerințelor software conform IEEE Software Requirements Specification.</li>
                <li>Textul <b>îngroșat</b> este folosit pentru a defini noțiuni personalizate sau pentru a accentua concepte importante.</li>
            </ul>
        </section>
        <section id="audience">
            <h4>1.3 Publicul țintă</h4>
            <p>Acest document este destinat profesorilor, studenților sau dezvoltatorilor, însă orice utilizator poate consulta secțiunile de <b>Interfața utilizatorului</b> și <b>Caracteristici ale sistemului</b> pentru a obține o mai bună înțelegere a ceea ce oferă aplicația.</p>
        </section>
        <section id="product-scope">
            <h4>1.4 Scopul Produsului</h4>
            <p>Scopul aplicației este de a oferi utilizatorilor, prin intermediul funcționalităților sale avansate, oportunitatea de a explora datele BMI în contextul țărilor membre UE, de a efectua comparații în funcție de diferite criterii precum anul și grupa de vârstă, și de a vizualiza tendințe și distribuții în moduri variate și interactive.</p>
        </section>
        <section id="references">
            <h4>1.5 Bibliografie</h4>
            <ul>
                <li>Cursul Tehnologii Web din cadrul facultății</li>
                <li><a href="https://github.com/rick4470/IEEE-SRS-Tempate">H Rick. IEEE-Template - GitHub</a></li>
            </ul>
        </section>
    </section>
    <section id="overall">
        <h3>2. Descriere Generală</h3>
        <section id="product-perspective">
            <h4>2.1 Perspectiva produsului</h4>
            <p>VisB (Visualizer for BMI) este o aplicație dezvoltată în cadrul cursului de Tehnologii Web, menită să ofere o platformă comprehensivă pentru calculul, vizualizarea și compararea indicelui de masă corporală (BMI) și a altor date relevante. Utilizatorii pot calcula BMI-ul propriu folosind două unități de măsură diferite (metric și US/engleză), oferind astfel o flexibilitate optimă în funcție de preferințele lor.</p>
            <p>Aplicația permite utilizatorilor să vizualizeze statistici legate de procentul BMI al țărilor din Uniunea Europeană, bazate pe datele furnizate de Eurostat. De asemenea, utilizatorii pot compara aceste date în mod flexibil și le pot vizualiza în trei moduri diferite, oferind o perspectivă detaliată asupra distribuției BMI în diverse țări europene.</p>
            <p>Utilizatorii cu rol de administrator au acces la funcționalități suplimentare, inclusiv administrarea bazei de date. Aceștia pot vizualiza, adăuga, edita și șterge date din baza de date, asigurând astfel o gestionare eficientă și actualizarea constantă a informațiilor disponibile în aplicație.</p>
        </section>
        <section id="product-functions">
            <h4>2.2 Funcționalitățile produsului</h4>
            <p>Fiecare utilizator va avea acces la următoarele funcționalități:</p>
                <ul>
                    <li>să consulte pagina "Acasă" pentru a se informa în detaliu despre semnificația indicelui de masă corporală (BMI) și pentru a-și calcula propriul BMI utilizând un calculator care permite alegerea unității de măsură preferate (metric sau US/engleză). De asemenea, utilizatorii pot vizualiza criteriile de clasificare ale BMI-ului propriu și categoria de sănătate corespunzătoare, împreună cu formulele generale utilizate pentru calculul BMI-ului.</li>
                    <li>să acceseze pagina "Statistics" pentru a vizualiza 4 tipuri de statistici despre țările din blocul Uniunii Europene:
                    <ol>
                        <li>Top 10 țări cu cea mai mare creștere privind indicele BMI în ultimii doi ani pentru care există informații în baza de date.</li>
                        <li>Top 10 țări cu cel mai mare risc de obezitate în cel mai recent an disponibil în baza de date, calculat pe baza unui indice ponderat.</li>
                        <li>Top 10 țări cu cea mai mare medie procentuală de pre-obezitate, calculată ca medie aritmetică a valorilor din toți anii disponibili.</li>
                        <li>Listă grupată (valoare, an, listă de țări) pentru țările care au aceeași valoare pentru anul respectiv, privind datele referitoare la persoanele "Overweight".</li>
                    </ol>
                </li>
            <li>să acceseze pagina "Comparare" pentru a compara în mod flexibil datele din baza de date, utilizatorul având posibilitatea de a alege țările, anii și tabelele pentru comparare.</li>
            <li>să acceseze pagina "Vizualizare" pentru a vizualiza datele din baza de date în 3 maniere diferite:
                <ul>
                    <li>Bar Chart (unde utilizatorul poate alege anul și tabela dorită pentru vizualizare).</li>
                    <li>Geo Chart (unde utilizatorul poate alege anul și tabela dorită pentru vizualizare).</li>
                    <li>Line Chart (unde utilizatorul poate alege tabela dorită pentru vizualizare, pentru care se afișează progresul liniar al țărilor pe parcursul anilor).</li>
                </ul>
            </li>
            <li>să acceseze pagina "Contact" pentru a beneficia de informațiile necesare pentru contactarea echipei în caz de cereri privind modul de utilizare a aplicației, feedback sau alte întrebări.</li>
            <li>dacă utilizatorul are rol de <b>admin</b>, acesta poate accesa funcționalități suplimentare:
                <ul>
                    <li>Accesarea unei interfețe personalizate pentru admin unde poate vizualiza și gestiona toate datele din baza de date sub formă tabelară, prin logare în pagina Login din interfața utilizatorului.</li>
                    <li>Importarea datelor din fișiere CSV pentru actualizarea bazei de date în pagina ”Main Page”.</li>
                    <li>Vizualizarea datelor și descărcarea acestora în formatele CSV, WebP și SVG în pagina ”Visualize Data”.</li>
                    <li>Modificarea datelor prin adăugarea, editarea sau ștergerea înregistrărilor existente în baza de date în pagina ”Modify Data”.</li>
                    <li>Logout pentru a reveni la interfața de utilizator.</li>
                </ul>
            </li>
        </section>
        <section id="users">
            <h4>2.3 Clase și caracteristici ale utilizatorilor</h4>
            <h5>2.3.1 Utilizator principal</h5>
            <ul>
                <li>Utilizatorii platformei sunt persoane din diverse categorii sociale și demografice, având în comun dorința de a monitoriza și evalua indicele de masă corporală.</li>
            </ul>
            <h5>2.3.2 Caracteristici</h5>
            <ul>
                <li>Utilizatorii care au rol de <b>admin</b> pot accesa toate paginile și au funcționalitatea de a adăuga și șterge date</li>
                <li>Utilizatori autentificați (Non-admin)
                <ul>
                    <li><b>Acces restricționat:</b> Au acces la paginile de profil, istoricul personal al IMC-ului și unele funcționalități de bază.</li>
                    <li><b>Vizualizare și analiză:</b> Pot vizualiza propriile date de IMC și rapoarte personalizate.</li>
                    <li><b>Funcționalități limitate:</b> Pot adăuga și modifica doar propriile date de IMC și setările de profil personal.</li>
                </ul>
            </li>
            <li>Utilizatori neautentificați
                <ul>
                    <li><b>Acces limitat:</b> Pot vizualiza doar paginile publice, cum ar fi informații generale despre IMC, articole educative și exemple de calcule.</li>
                    <li><b>Funcționalități de bază:</b> Pot folosi calculatorul de IMC fără a salva datele sau a accesa funcționalitățile avansate.</li>
                    <li><b>Invitație la autentificare:</b> Sunt încurajați să se autentifice sau să se înregistreze pentru a beneficia de toate funcționalitățile platformei.</li>
                </ul>
            </li>
        </ul>
        </section>
        <section id="operating-environment">
            <h4>2.4 Mediul de operare</h4>
            <p>Produsul dezvoltat poate fi utilizat pe orice dispozitiv cu un browser web care suportă HTML5, CSS și JavaScript. Aplicația este construită utilizând PHP pe backend și implementând arhitectura MVC pentru o structură clară și ușor de întreținut. Routarea fișierelor este realizată eficient pentru a asigura navigarea fluidă între diferitele pagini și funcționalități. De asemenea, am dezvoltat un API REST propriu pentru a vizualiza și compara informații referitoare la indicele de masă corporală (IMC), folosind date publice furnizate de Eurostat.</p>
        </section>
        <section id="documentation">
            <h4>2.5 Documentația pentru utilizator</h4>
            <p>Utilizatorii pot consulta acest document pentru explicații detaliate despre funcționalitățile aplicației web.</p>
        </section>
    </section>
    <section id="external">
        <h3>3. Interfețele aplicației</h3>
        <section id="user-interface">
            <h4>3.1 Interfața utilizatorului</h4>
            <p>Mai jos, puteți vedea o prezentare generală a fiecărei pagini a aplicației și funcționalităților pe care le oferă:</p>
            <ul>
                <li id="nav-bar"><b>Bara de navigație</b></li>
                <li>Aceasta reprezintă meniul de navigare către fiecare pagină a aplicației, prezent pe fiecare pagină totodată.</li>
                <img src=".\img\bara_de_navigatie.jpg" style="width: 60%; height: auto;">
                <li id="home-page"><b>Pagina de acasă</b></li>
                <li>Pagina are rolul de a prezenta definiția BMI-ului și de a oferi posibilitatea calculării acestuia.</li>
                <img src=".\img\home1.jpg" style="width: 60%; height: auto;">
                <img src=".\img\home2.jpg" style="width: 60%; height: auto;">
                <img src=".\img\home3.jpg" style="width: 60%; height: auto;">
                <li id="learning"><b>Pagina de statistică</b></li>
                <li>Pagina oferă un tabel cu statistici referitoare la statele membre din UE.</li>
                <img src=".\img\statistics1.jpg" style="width: 60%; height: auto;">
                <img src=".\img\statistics2.jpg" style="width: 60%; height: auto;">
                <p>Iar mai jos am atașat afișarea statisticilor:</p>
                <img src=".\img\statistics3.jpg" style="width: 60%; height: auto;">
                <img src=".\img\statistics5.jpg" style="width: 60%; height: auto;">
                <img src=".\img\statistics6.jpg" style="width: 60%; height: auto;">
                <img src=".\img\statistics7.jpg" style="width: 60%; height: auto;">
                <li id="rules"><b>Pagina de comparare</b></li>
                <li>Pagina unde utilizatorul poate compara informațiile din baza de date după criteriile oferite.</li>
                <img src=".\img\comparison.jpg" style="width: 60%; height: auto;">
                <li id="signs"><b>Pagina de vizualizare</b></li>
                <li>Pagina conține un grafic, la alegere, cu datele din baza de date.</li>
                <img src=".\img\visualization1.jpg" style="width: 60%; height: auto;">
                <img src=".\img\visualization2.jpg" style="width: 60%; height: auto;">
                <p>Varianta de Geo Chart:</p>
                <img src=".\img\visualization3.jpg" style="width: 60%; height: auto;">
                <p>Varianta de Line Chart:</p>
                <img src=".\img\visualization4.jpg" style="width: 60%; height: auto;">
                <li>Pagina de contact.</li>
                <img src=".\img\contact.jpg" style="width: 60%; height: auto;">
                <li>Pagina de login pentru admin.</li>
                <img src=".\img\login.jpg" style="width: 60%; height: auto;">
                <li><b>Pagina administratorului</b></li>
                <p>Main Page:</p>
                <img src=".\img\admin1.jpg" style="width: 60%; height: auto;">
                <p>Crop din Visualize Data:</p>
                <img src=".\img\admin2.jpg" style="width: 60%; height: auto;">
                <p>Modify Data:</p>
                <img src=".\img\modify1.jpg" style="width: 60%; height: auto;">
                <img src=".\img\modify2.jpg" style="width: 60%; height: auto;">
            </ul>
        </section>
        <section id="hardware-interface">
            <h4>3.2 Interfața Hardware</h4>
            <p>Acest produs nu necesită interfețe hardware, funcționând pe orice platformă (calculatoare, laptopuri, telefoane etc.), care are instalată un browser.</p>
        </section>
        <section id="software-interface">
            <h4>3.3 Interfața Software</h4>
            <p>Cerințele minime de software includ un browser funcțional, compatibil cu HTML5 și cu JavaScript.</p>
            <h5>MySQL Database</h5>
            <p>Aceasta reprezintă baza de date în care stocăm informații despre fiecare utilizator, întrebările, chestionarele și răspunsurile la acestea.</p>
        </section>
        <section id="communication-interface">
            <h4>3.4 Interfața de comunicare</h4>
            <p>Aplicația necesită o conexiune la internet. Standardul de comunicare care va fi utilizat este HTTP.</p>
        </section>
        <section id="non-functional">
            <h3>4. Funcționalități pentru protecție și securitate</h3>
            <section id="safety">
                <h4>4.1 Protecția datelor</h4>
                <p>Aplicația va asigura confidențialitatea datelor prin intermediul unei criptări.</p>
            </section>
            <section id="software-attributes">
                <h4>4.2 Calitățile Software</h4>
                <ul>
                    <li>Adaptabilitate</li>
                    <li>Ușurință în utilizare</li>
                    <li>Flexibilitate</li>
                </ul>
            </section>
        </section>
    </section>
</article>
</body>
</html>