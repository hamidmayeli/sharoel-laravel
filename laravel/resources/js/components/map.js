import Map from "ol/Map.js";
import View from "ol/View.js";
import TileLayer from "ol/layer/Tile.js";
import OSM from "ol/source/OSM.js";
import { fromLonLat } from "ol/proj.js";

document.addEventListener("alpine:init", () => {
    Alpine.data("map", function () {
        return {
            map: {},
            init() {
                this.map = new Map({
                    target: this.$refs.map,
                    layers: [
                        new TileLayer({
                            source: new OSM(),
                        }),
                    ],
                    view: new View({
                        center: fromLonLat([6.823618359973615,51.22703182569713]),
                        zoom: 16,
                    }),
                });
            },
        };
    });
});
