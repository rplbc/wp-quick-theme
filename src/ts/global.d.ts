import { Alpine as IAlpine } from 'alpinejs'

export {}

declare global {
  interface Window {
    Alpine: IAlpine
  }
}
