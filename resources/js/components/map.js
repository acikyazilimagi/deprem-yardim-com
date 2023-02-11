import L from 'leaflet'
import 'leaflet.markercluster'

export default (Alpine) => {
    Alpine.data('map', ({locations}) => ({
        map: null,
        locations,
        init() {
            this.map = L.map(this.$el).setView([36.4202214, 36.238724], 8.5)

            L.tileLayer('https://mt0.google.com/vt/lyrs=m&hl=en&x={x}&y={y}&z={z}&apistyle=s.e%3Al.i%7Cp.v%3Aoff%2Cs.t%3A3%7Cs.e%3Ag%7C')
                .addTo(this.map)

            const markers = L.markerClusterGroup();

            const bbox = [26.0433512713, 35.8215347357, 44.7939896991, 42.1414848903]

            this.locations.forEach(location => {
                const marker = L.marker(location.coordinates);

                marker.bindPopup(location.geocode_data.Label).openPopup();
                markers.addLayer(marker)
            })

            this.map.addLayer(markers)
        }
    }))
};
