

import { tns } from "tiny-slider";
import $ from "jquery";

tns (
    {
        "container": ".blocks-sm .cms-block-container-row ",
        "items": 3,
        "slideBy": "page",
        "mouseDrag": true,
        "swipeAngle": false,
        "speed": 400
      }
);


console.log($(window).width());