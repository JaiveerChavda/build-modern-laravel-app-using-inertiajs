import { createApp, h } from 'vue'
import { Head, createInertiaApp } from '@inertiajs/vue3'
import Layout from './Shared/Layout.vue'

createInertiaApp({
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue',{eager:true})
    let page = pages[`./Pages/${name}.vue`]
    page.default.layout = page.default.layout || Layout
    return page
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .component("Head",Head)
      .mount(el)
  },
  progress:{
    showSpinner:true,
    color:'cyan',
    includeCSS:true
  },
  title:title => `MyApp - ${title}`,
})
