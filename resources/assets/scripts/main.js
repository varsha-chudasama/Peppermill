import $ from 'jquery';
import '@popperjs/core';
import 'bootstrap/dist/js/bootstrap';
import "select2/dist/js/select2.js";
import { App } from './parts/app.js'
import { Plugins } from './parts/plugins.js'
import { Parts } from './parts/parts.js'
import { Header } from './parts/header.js';
import { Slick } from './parts/slick.js';
import { Privacy } from './parts/privacy.js';
import { Closet } from './parts/closet.js';
import { Dropdown } from './parts/dropdown.js';
import { Filter } from './parts/filter.js';
import { Select } from './parts/select.js';
import { Handlebar } from './parts/handlebar.js';


// export for others scripts to use
window.$ = $;
window.jQuery = jQuery;

$(function () {

  window.windowWidth = $(window).width();
  window.windowHeight = $(window).height();

  window.isiPhone = navigator.userAgent.toLowerCase().indexOf('iphone');
  window.isiPad = navigator.userAgent.toLowerCase().indexOf('ipad');
  window.isiPod = navigator.userAgent.toLowerCase().indexOf('ipod');

  //Functions List Below

  window.app = new App();
  window.app.init();

  window.plugins = new Plugins();
  window.plugins.init();

  window.parts = new Parts();
  window.parts.init();

  window.header = new Header();
  window.header.init();

  window.slick = new Slick();
  window.slick.init();

  window.privacy = new Privacy();
  window.privacy.init();

  window.closet = new Closet();
  window.closet.init();

  window.dropdown = new Dropdown();
  window.dropdown.init();

  window.filter = new Filter();
  window.filter.init();

  window.select = new Select();
  window.select.init();

  window.handlebar = new Handlebar();
  window.handlebar.init();
});

// ===========================================================================
$(document).ready(function () {
  let $img = $("#gfg-img");
  let $preview = $(".zoom-preview");

  let x = $preview.width() / 100;
  let y = $preview.height() / 100;

  $img.on("mousemove", function (e) {
    $preview.css({
      "display": "block",
      "background-image": "url(https://media.geeksforgeeks.org/wp-content/uploads/20220316223348/gfg-300x300.jpg)",
      "background-size": $img.width() * x + "px " + $img.height() * y + "px"
    });

    let posX = e.offsetX;
    let posY = e.offsetY;

    $preview.css("background-position", "-" + posX * x + "px -" + posY * y + "px");
  });

  $img.on("mouseout", function () {
    $preview.css("display", "none");
  });
});
