import { styler, tween, easing } from "popmotion";

const shape = styler(document.querySelector("#target"));
const morph = polymorph.interpolate(["#svg-becky", "#svg-rose"], {
  precision: 6
});

tween({
  duration: 8000,
  ease: easing.easeInOut,
  flip: Infinity
})
  .pipe(morph)
  .start(shape.set("d"));
