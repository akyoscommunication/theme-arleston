import gsap from 'gsap';


export class Header {
  constructor() {
    this._header = document.querySelector('header');
    this._hero = document.querySelector('.s-hero');
    this._itemsWithChildren = document.querySelectorAll('.menu-item-has-children');

    if (this._hero) {
      this._heroHeight = this._hero.clientHeight;
      this._scrollValue = 0;
      this.scroll();

      window.addEventListener('scroll', this.scroll);
    }

    if (this._itemsWithChildren.length) {
      this._itemsWithChildren.forEach(item => {
        this.handleSubmenu(item)
      })
    }
  }

  scroll = () => {
    this._scrollValue = window.scrollY;

    if (this._scrollValue > this._heroHeight) {
      this._header.classList.add('scrolled');
    } else {
      this._header.classList.remove('scrolled');
    }
  }

  handleSubmenu = (item) => {

    const submenu = item.querySelector('.sub-menu');
    let clicked = false;


    item.addEventListener('click', (e) => {
      let target = e.target;
      let parent = target.parentNode;

      if (parent.classList.contains('menu-item-has-children') && !clicked) {
        e.preventDefault();
      }

      clicked = !clicked;
    })

    const openAnimation = gsap.to(submenu, {
      height: 'auto',
      duration: 0.5,
      autoAlpha: 1,
      ease: 'power2.inOut',
      paused: true,
      onStart: () => {
        submenu.classList.add('open')
      },
      onReverseComplete: () => {
        submenu.classList.remove('open')
      }
    })

    item.addEventListener('mouseenter', (e) => {
      openAnimation.play()
      console.log('non')
    })

    item.addEventListener('mouseleave', (e) => {
      console.log('oui')
      openAnimation.reverse()
    })
  }
}
