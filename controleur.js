// Contenu de l'en-tête HTML
const enteteHTML = `
<header>
    <nav>
        <ul>
            <li><a href="Vue_Accueil.html">Accueil</a></li>
            <li><a href="Vue_Projets.html">Projets</a></li>
            <li><a href="Vue_Competences.html">Compétences</a></li>
        </ul>
    </nav>
</header>`;

// Contenu du pied de page HTML
const piedHTML = `
<footer>
    <p>&copy; 2024 Luca Turberg</p>
    <p>Contact: <a href="mailto:luca.turberg@gmail.com">luca.turberg@gmail.com</a></p>
</footer>`;

// Insertion de l'en-tête
document.getElementById('entete').innerHTML = enteteHTML;

// Insertion du pied de page
document.getElementById('pied').innerHTML = piedHTML;
