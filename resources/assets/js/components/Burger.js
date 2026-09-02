export class Burger {
  constructor() {
    this._menuMobile = document.querySelector('.header-nav__mobile')
    this._burger = document.querySelector('#burger')

    if (!this._menuMobile) return

    this.init()
  }

  init() {
    this._burger.addEventListener('click', () => {
      this._menuMobile.classList.toggle('is-active')
    })
  }
}
