import noUiSlider from 'nouislider'
window.noUiSlider = noUiSlider

import Litepicker from 'litepicker'
window.Litepicker = Litepicker

import TomSelect from 'tom-select'
window.TomSelect = TomSelect

import axios from 'axios'
window.axios = axios
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest'

import Alpine from 'alpinejs'
window.Alpine = Alpine
Alpine.start()

import '@tabler/core/src/js/tabler'
import '@tabler/core/src/js/demo'
import '@tabler/core/src/js/demo-theme'