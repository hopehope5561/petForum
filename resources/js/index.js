function toggleMenu() {
    var menu = document.getElementById('nav-menu-mobil');
    menu.classList.toggle('active');
}

const searchBtn = document.getElementById('searchBtn');
const searchBox = document.getElementById('searchBox');
const closeSearch = document.getElementById('closeSearch');
const input = document.getElementById('searchInput');

const placeholders = [
  "Kedi",
  "Royal Canin",
  "Hill's",
  "Acana",
  "Orijen"
];

let currentWord = 0;
let currentChar = 0;
let isDeleting = false;
let typeInterval;

function typeWriter() {
  const word = placeholders[currentWord];
  if (!isDeleting) {
    input.setAttribute('placeholder', word.substring(0, currentChar + 1));
    currentChar++;
    if (currentChar === word.length) {
      isDeleting = true;
      typeInterval = setTimeout(typeWriter, 1700);
      return;
    }
  } else {
    input.setAttribute('placeholder', word.substring(0, currentChar - 1));
    currentChar--;
    if (currentChar === 0) {
      isDeleting = false;
      currentWord = (currentWord + 1) % placeholders.length;
    }
  }
  typeInterval = setTimeout(typeWriter, isDeleting ? 60 : 120);
}

// Butona tıklayınca arama kutusu açılsın
searchBtn.addEventListener('click', function() {
  searchBox.style.display = 'flex';
  input.value = '';
  currentWord = 0;
  currentChar = 0;
  isDeleting = false;
  typeWriter();
  input.focus();
});

// Kapat butonuna tıklayınca arama kutusu kapansın
closeSearch.addEventListener('click', function() {
  searchBox.style.display = 'none';
  clearTimeout(typeInterval);
  input.setAttribute('placeholder', '');
});



document.querySelectorAll(".ilan-basligi-mobil").forEach(ilan => {
  let text = ilan.innerText;
  if (text.length > 7) {
    ilan.innerText = text.substring(0, 7) + "...";
  }
});

document.querySelectorAll(".homepage-section-question-answer-user-question-text").forEach(ilan => {
  let text = ilan.innerText;
  if (text.length > 34) {
    ilan.innerText = text.substring(0, 34) + "...";
  }
});

document.querySelectorAll("#question-answer-user-name-replied").forEach(ilan => {
  let text = ilan.innerText;
  if (text.length > 13) {
    ilan.innerText = text.substring(0, 13) + "...";
  }
});









