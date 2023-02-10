import './utils';
import './carousel';
import './custom';

/* ALPINE */
import Alpine from 'alpinejs'
import Collapse from '@alpinejs/collapse'
import Focus from '@alpinejs/focus'
import FormsAlpinePlugin from '../../vendor/filament/forms/dist/module.esm'
import NotificationsAlpinePlugin from '../../vendor/filament/notifications/dist/module.esm'
import Sweetalert from "./sweetalert";

Alpine.plugin(Focus)
Alpine.plugin(FormsAlpinePlugin)
Alpine.plugin(NotificationsAlpinePlugin)
Alpine.plugin(Collapse)
Alpine.plugin(Sweetalert)

window.Alpine = Alpine

Alpine.start()

