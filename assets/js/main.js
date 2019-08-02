const logos = [...Array(39).keys()]

const randomize = (n) => logos.sort(() => 0.5 - Math.random()).slice(0, n);

const images = $(".random-image:lt(3)");

let interval = setInterval(() => {
  let randomImages = randomize(images.length);
  images.each(function (index) {
    $(this).animate({opacity: 0}, 250, function () {
      this.src = this.src.replace(/(.*)\/.*(\.png$)/i, `$1/${randomImages[index]}$2`);
      $(this).animate({opacity: 1}, 250);
    });
  });
}, 2000);
