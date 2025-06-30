import './bootstrap.js';

import Alpine from 'alpinejs';
import { intersect } from "@alpinejs/intersect";
import { sort } from "@alpinejs/sort";

window.Alpine = Alpine;
Alpine.plugin(intersect)
Alpine.plugin(sort)
Alpine.start();
