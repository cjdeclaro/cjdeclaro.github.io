const colors = {
  fire: '#FDDFDF',
  grass: '#DEFDE0',
  electric: '#FCF7DE',
  water: '#DEF3FD',
  ground: '#f4e7da',
  rock: '#d5d5d4',
  fairy: '#fceaff',
  poison: '#cbc3e3',
  bug: '#f8d5a3',
  dragon: '#97b3e6',
  psychic: '#eaeda1',
  flying: '#F5F5F5',
  fighting: '#E6E0D4',
  normal: '#F5F5F5'
};

const poke_container = document.getElementById('poke_container');
const pokemon_number = 50;

const fetchPokemons = async () => {
  for (let i = 1; i <= pokemon_number; i++) {
    await getPokemon(i);
  }
}

const getPokemon = async id => {
  const url = `https://pokeapi.co/api/v2/pokemon/${id}`;
  const res = await fetch(url);
  const pokemon = await res.json();

  createPokemonCard(pokemon);
}

function createPokemonCard(pokemon) {
  const pokemonElement = document.createElement('div');
  pokemonElement.classList.add('pokemon');
  pokemonElement.classList.add('wow');

  const name = pokemon.name;
  const type = pokemon.types[0].type.name;

  pokemonElement.style.backgroundColor = colors[type];

  const pokemonInnerHTML = `
    <div class="img-container">
      <img src="${pokemon.sprites.front_default}">
    </div>

    <div class="info">
      <span class="number">#${pokemon.id.toString().padStart(3, '0')}</span>
      <h3 class="name">${name}</h3>
      <small class="type">Type: <span>${type}</span></small>
    </div>
  `;

  pokemonElement.innerHTML = pokemonInnerHTML;
  poke_container.appendChild(pokemonElement);
}

fetchPokemons();
