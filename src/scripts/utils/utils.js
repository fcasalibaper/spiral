import $ from 'jquery';

// Checkea si el elemento existe en la parte VISIBLE de la pantalla (window view)
export function checkIsInScreen(element, fullyInView) {
  const pageTop       = $(window).scrollTop(),
        pageBottom    = pageTop + $(window).height(),
        elementTop    = $(element).offset().top,
        elementBottom = elementTop + $(element).height();

  // CHECKEA SI EL ELEMENTO SELECCIONADO ESTA EN VISTA (si el 2do atributo pasado es false, checkea a penas aparece, si es true checkea si esta completamente en vista) ej :
  /* if (homeFvg.vitrinasDestacada.checkIsInScreen($('.home_catDestacadas'), false)) {
    primarias.addClass('active');
  } else {
    primarias.removeClass('active');
  } */

  if (fullyInView === true) {
      return ((pageTop < elementTop) && (pageBottom > elementBottom));
  } else {
      return ((elementTop <= pageBottom) && (elementBottom >= pageTop));
  }
}

// Devuelve TRUE o  FALSE, si es un despositivo apple
export function isAppleDevice() {
  if (navigator.userAgent.match(/(iPhone|iPod|iPad)/) != null) {
    return true;
  }
  return false;
}

// LE PASAS EL ELEMENTO Q NECESITA OTRO TIPO DE CSS SI ES SAFARI (le suma la clase '.isSafari')
export function isSafari(element) {
  if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1) {
    $(element).addClass('isSafari');
  }
}

/* ES PARA BOTON TIPO "VER MÁS", al clickearlo le cambia una clase al padre y el texto del boton clickeado
Le pasa 6 parametros:
elemento clickeado,
elemento a quien agregarle la clase,
clase que queremos aregarle,
elemento a quien cambiarle texto,
texto al hacer click (tiene un texto por defecto 'Ver menos categorías')
texto al cerrar (tiene un texto por defecto 'Ver más categorías')
*/
export function clickToggle (elementClicked, elementToAddClass, classToAddandRemove, elementToChangeText, textOpen = 'Ver menos categorías', textClose  = 'Ver más categorías') {
  $(elementClicked).find(elementToChangeText).text(textClose);

  $(elementClicked).on('click', (e) => {
    e.preventDefault();
    $(elementToAddClass).toggleClass(classToAddandRemove);

    if ($(elementToAddClass).hasClass(classToAddandRemove)) {
      $(elementClicked).find(elementToChangeText).text(textOpen);
    } else {
      $(elementClicked).find(elementToChangeText).text(textClose);
    }
  });
}

export function isMobile() {
  return window.matchMedia("(max-width: 575px)").matches;
}

export function DownTo(res) {
  switch (res) {
    case 'xs':
      return window.matchMedia("(max-width: 575px)").matches;
    break;
    case 'sm':
      return window.matchMedia("(max-width: 767px)").matches;
    break;
    case 'md':
      return window.matchMedia("(max-width: 991px)").matches;
    break;
    case 'lg':
      return window.matchMedia("(max-width: 1200px)").matches;
    break;
    case 'xl':
      return window.matchMedia("(max-width: 1000000px)").matches;
    break;
  }
}

export function UpTo(res) {
  switch (res) {
    case 'xs':
      return window.matchMedia("(min-width: 0px)").matches;
    break;
    case 'sm':
      return window.matchMedia("(min-width: 576px)").matches;
    break;
    case 'md':
      return window.matchMedia("(min-width: 768px)").matches;
    break;
    case 'lg':
      return window.matchMedia("(min-width: 992px)").matches;
    break;
    case 'xl':
      return window.matchMedia("(min-width: 1201px)").matches;
    break;
  }
}


export const toolResponsive = () => {
  const toolHTML = `
    <div class="toolresponsive">
      <div class="toolresponsive__break toolresponsive__break--xl">XL</div>
      <div class="toolresponsive__break toolresponsive__break--lg">LG</div>
      <div class="toolresponsive__break toolresponsive__break--md">MD</div>
      <div class="toolresponsive__break toolresponsive__break--sm">SM</div>
      <div class="toolresponsive__break toolresponsive__break--xs">XS</div>
    </div>
  `;

  $('body').append(toolHTML);
}

/**
 * Add an item to a localStorage() array
 * @param {String} name  The localStorage() key
 * @param {String} value The localStorage() value
 */
export const addToLocalStorageArray = function (name, value) {

	// Get the existing data
	var existing = localStorage.getItem(name);

	// If no existing data, create an array
	// Otherwise, convert the localStorage string to an array
	existing = existing ? existing.split(',') : [];

	// Add new data to localStorage Array
	existing.push(value);

	// Save back to localStorage
	localStorage.setItem(name, existing.toString());

};

/**
 * Add an item to a localStorage() object
 * @param {String} name  The localStorage() key
 * @param {String} key   The localStorage() value object key
 * @param {String} value The localStorage() value object value
 */
export const addToLocalStorageObject = function (name, key, other = null, value) {

	// Get the existing data
	var existing = localStorage.getItem(name);

	// If no existing data, create an array
	// Otherwise, convert the localStorage string to an array
	existing = existing ? JSON.parse(existing) : {};

	// Add new data to localStorage Array
  existing[key] = value;
  
  if ( !other === null || !other === undefined ) {
    existing[key][other] = value;
  } else {
    existing[key] = value;
  }

	// Save back to localStorage
	localStorage.setItem(name, JSON.stringify(existing));

};

export const findLastIndex = function (array, searchKey, searchValue) {
  var index = array.slice().reverse().findIndex(x => x[searchKey] === searchValue);
  var count = array.length - 1
  var finalIndex = index >= 0 ? count - index : index;
  // console.log(finalIndex)
  return finalIndex;
}

export const stringHasNumber = (el) => {
  let hasNumber = /\d/;
  return hasNumber.test(el); // true
}