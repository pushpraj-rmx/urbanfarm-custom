<!-- head: index, shop -->

  <body>
    <!--  svg : for shop and--14 files  -->

    <div class="header-mobile header_sticky">
      <div class="container d-flex align-items-center h-100">
        <a class="mobile-nav-activator d-block position-relative" href="#">
          <svg
            class="nav-icon"
            width="25"
            height="18"
            viewBox="0 0 25 18"
            xmlns="http://www.w3.org/2000/svg"
          >
            <use href="#icon_nav" />
          </svg>
          <span
            class="btn-close-lg position-absolute top-0 start-0 w-100"
          ></span>
        </a>

        <div class="logo">
          <a href="../index.html">
            <img
              src="./images/logo.png"
              alt="Uomo"
              class="logo__image d-block"
            />
          </a>
        </div>

        <a
          href="#"
          class="header-tools__item header-tools__cart js-open-aside"
          data-aside="cartDrawer"
        >
          <svg
            class="d-block"
            width="20"
            height="20"
            viewBox="0 0 20 20"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <use href="#icon_cart" />
          </svg>
          <span
            class="cart-amount d-block position-absolute js-cart-items-count"
            >3</span
          >
        </a>
      </div>

      <nav
        class="header-mobile__navigation navigation d-flex flex-column w-100 position-absolute top-100 bg-body overflow-auto"
      >
        <div class="container">
          <form
            action="https://uomo-html.flexkitux.com/Demo2/search.html"
            method="GET"
            class="search-field position-relative mt-4 mb-3"
          >
            <div class="position-relative">
              <input
                class="search-field__input w-100 border rounded-1"
                type="text"
                name="search-keyword"
                placeholder="Search products"
              />
              <button
                class="btn-icon search-popup__submit pb-0 me-2"
                type="submit"
              >
                <svg
                  class="d-block"
                  width="20"
                  height="20"
                  viewBox="0 0 20 20"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <use href="#icon_search" />
                </svg>
              </button>
              <button
                class="btn-icon btn-close-lg search-popup__reset pb-0 me-2"
                type="reset"
              ></button>
            </div>

            <div class="position-absolute start-0 top-100 m-0 w-100">
              <div class="search-result"></div>
            </div>
          </form>
        </div>

        <div class="container">
          <div class="overflow-hidden">
            <ul class="navigation__list list-unstyled position-relative">
              <li class="navigation__item">
                <a
                  href="#"
                  class="navigation__link js-nav-right d-flex align-items-center"
                  >Home<svg
                    class="ms-auto"
                    width="7"
                    height="11"
                    viewBox="0 0 7 11"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <use href="#icon_next_sm" /></svg
                ></a>
                <div
                  class="sub-menu position-absolute top-0 start-100 w-100 d-none"
                >
                  <a
                    href="#"
                    class="navigation__link js-nav-left d-flex align-items-center border-bottom mb-2"
                    ><svg
                      class="me-2"
                      width="7"
                      height="11"
                      viewBox="0 0 7 11"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <use href="#icon_prev_sm" /></svg
                    >Home</a
                  >
                  <ul class="list-unstyled">
                    <li class="sub-menu__item">
                      <a
                        href="../Demo1/index.html"
                        class="menu-link menu-link_us-s"
                        >Home 1</a
                      >
                    </li>
                    <li class="sub-menu__item">
                      <a href="index.html" class="menu-link menu-link_us-s"
                        >Home 2</a
                      >
                    </li>
                    <li class="sub-menu__item">
                      <a
                        href="../Demo3/index.html"
                        class="menu-link menu-link_us-s"
                        >Home 3</a
                      >
                    </li>
                    <li class="sub-menu__item">
                      <a
                        href="../Demo4/index.html"
                        class="menu-link menu-link_us-s"
                        >Home 4</a
                      >
                    </li>
                    <li class="sub-menu__item">
                      <a
                        href="../Demo5/index.html"
                        class="menu-link menu-link_us-s"
                        >Home 5</a
                      >
                    </li>
                    <li class="sub-menu__item">
                      <a
                        href="../Demo6/index.html"
                        class="menu-link menu-link_us-s"
                        >Home 6</a
                      >
                    </li>
                    <li class="sub-menu__item">
                      <a
                        href="../Demo7/index.html"
                        class="menu-link menu-link_us-s"
                        >Home 7</a
                      >
                    </li>
                    <li class="sub-menu__item">
                      <a
                        href="../Demo8/index.html"
                        class="menu-link menu-link_us-s"
                        >Home 8</a
                      >
                    </li>
                    <li class="sub-menu__item">
                      <a
                        href="../Demo9/index.html"
                        class="menu-link menu-link_us-s"
                        >Home 9</a
                      >
                    </li>
                    <li class="sub-menu__item">
                      <a
                        href="../Demo10/index.html"
                        class="menu-link menu-link_us-s"
                        >Home 10</a
                      >
                    </li>
                    <li class="sub-menu__item">
                      <a
                        href="../Demo11/index.html"
                        class="menu-link menu-link_us-s"
                        >Home 11</a
                      >
                    </li>
                    <li class="sub-menu__item">
                      <a
                        href="../Demo12/index.html"
                        class="menu-link menu-link_us-s"
                        >Home 12</a
                      >
                    </li>
                    <li class="sub-menu__item">
                      <a
                        href="../Demo13/index.html"
                        class="menu-link menu-link_us-s"
                        >Home 13</a
                      >
                    </li>
                    <li class="sub-menu__item">
                      <a
                        href="../Demo14/index.html"
                        class="menu-link menu-link_us-s"
                        >Home 14</a
                      >
                    </li>
                    <li class="sub-menu__item">
                      <a
                        href="../Demo15/index.html"
                        class="menu-link menu-link_us-s"
                        >Home 15</a
                      >
                    </li>
                    <li class="sub-menu__item">
                      <a
                        href="../Demo16/index.html"
                        class="menu-link menu-link_us-s"
                        >Home 16</a
                      >
                    </li>
                  </ul>
                </div>
              </li>
              <li class="navigation__item">
                <a
                  href="#"
                  class="navigation__link js-nav-right d-flex align-items-center"
                  >Shop<svg
                    class="ms-auto"
                    width="7"
                    height="11"
                    viewBox="0 0 7 11"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <use href="#icon_next_sm" /></svg
                ></a>
                <div
                  class="sub-menu position-absolute top-0 start-100 w-100 d-none"
                >
                  <a
                    href="#"
                    class="navigation__link js-nav-left d-flex align-items-center border-bottom mb-3"
                    ><svg
                      class="me-2"
                      width="7"
                      height="11"
                      viewBox="0 0 7 11"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <use href="#icon_prev_sm" /></svg
                    >Shop</a
                  >
                  <div class="sub-menu__wrapper">
                    <a
                      href="#"
                      class="navigation__link js-nav-right d-flex align-items-center"
                      >Shop List<svg
                        class="ms-auto"
                        width="7"
                        height="11"
                        viewBox="0 0 7 11"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <use href="#icon_next_sm" /></svg
                    ></a>
                    <div
                      class="sub-menu__wrapper position-absolute top-0 start-100 w-100 d-none"
                    >
                      <a
                        href="#"
                        class="navigation__link js-nav-left d-flex align-items-center border-bottom mb-2"
                        ><svg
                          class="me-2"
                          width="7"
                          height="11"
                          viewBox="0 0 7 11"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <use href="#icon_prev_sm" /></svg
                        >Shop List</a
                      >
                      <ul class="sub-menu__list list-unstyled">
                        <li class="sub-menu__item">
                          <a href="shop1.html" class="menu-link menu-link_us-s"
                            >Shop List V1</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a href="shop2.html" class="menu-link menu-link_us-s"
                            >Shop List V2</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a href="shop3.html" class="menu-link menu-link_us-s"
                            >Shop List V3</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a href="shop4.html" class="menu-link menu-link_us-s"
                            >Shop List V4</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a href="shop5.html" class="menu-link menu-link_us-s"
                            >Shop List V5</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a href="shop6.html" class="menu-link menu-link_us-s"
                            >Shop List V6</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a href="shop7.html" class="menu-link menu-link_us-s"
                            >Shop List V7</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a href="shop8.html" class="menu-link menu-link_us-s"
                            >Shop List V8</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a href="shop9.html" class="menu-link menu-link_us-s"
                            >Shop List V9</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a href="shop10.html" class="menu-link menu-link_us-s"
                            >Shop Item Style</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a href="shop11.html" class="menu-link menu-link_us-s"
                            >Horizontal Scroll</a
                          >
                        </li>
                      </ul>
                    </div>

                    <a
                      href="#"
                      class="navigation__link js-nav-right d-flex align-items-center"
                      >Shop Detail<svg
                        class="ms-auto"
                        width="7"
                        height="11"
                        viewBox="0 0 7 11"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <use href="#icon_next_sm" /></svg
                    ></a>
                    <div
                      class="sub-menu__wrapper position-absolute top-0 start-100 w-100 d-none"
                    >
                      <a
                        href="#"
                        class="navigation__link js-nav-left d-flex align-items-center border-bottom mb-2"
                        ><svg
                          class="me-2"
                          width="7"
                          height="11"
                          viewBox="0 0 7 11"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <use href="#icon_prev_sm" /></svg
                        >Shop Detail</a
                      >
                      <ul class="sub-menu__list list-unstyled">
                        <li class="sub-menu__item">
                          <a
                            href="product2_variable.html"
                            class="menu-link menu-link_us-s"
                            >Shop Detail V1</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a
                            href="product7_v2.html"
                            class="menu-link menu-link_us-s"
                            >Shop Detail V2</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a
                            href="product8_v3.html"
                            class="menu-link menu-link_us-s"
                            >Shop Detail V3</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a
                            href="product9_v4.html"
                            class="menu-link menu-link_us-s"
                            >Shop Detail V4</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a
                            href="product10_v5.html"
                            class="menu-link menu-link_us-s"
                            >Shop Detail V5</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a
                            href="product11_v6.html"
                            class="menu-link menu-link_us-s"
                            >Shop Detail V6</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a
                            href="product12_v7.html"
                            class="menu-link menu-link_us-s"
                            >Shop Detail V7</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a
                            href="product13_v8.html"
                            class="menu-link menu-link_us-s"
                            >Shop Detail V8</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a
                            href="product14_v9.html"
                            class="menu-link menu-link_us-s"
                            >Shop Detail V9</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a
                            href="product15_v10.html"
                            class="menu-link menu-link_us-s"
                            >Shop Detail V10</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a
                            href="product16_v11.html"
                            class="menu-link menu-link_us-s"
                            >Shop Detail V11</a
                          >
                        </li>
                      </ul>
                    </div>

                    <a
                      href="#"
                      class="navigation__link js-nav-right d-flex align-items-center"
                      >Other Pages<svg
                        class="ms-auto"
                        width="7"
                        height="11"
                        viewBox="0 0 7 11"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <use href="#icon_next_sm" /></svg
                    ></a>
                    <div
                      class="sub-menu__wrapper position-absolute top-0 start-100 w-100 d-none"
                    >
                      <a
                        href="#"
                        class="navigation__link js-nav-left d-flex align-items-center border-bottom mb-2"
                        ><svg
                          class="me-2"
                          width="7"
                          height="11"
                          viewBox="0 0 7 11"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <use href="#icon_prev_sm" /></svg
                        >Other Pages</a
                      >
                      <ul class="sub-menu__list list-unstyled">
                        <li class="sub-menu__item">
                          <a href="shop12.html" class="menu-link menu-link_us-s"
                            >Collection Grid</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a
                            href="product1_simple.html"
                            class="menu-link menu-link_us-s"
                            >Simple Product</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a
                            href="product2_variable.html"
                            class="menu-link menu-link_us-s"
                            >Variable Product</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a
                            href="product3_external.html"
                            class="menu-link menu-link_us-s"
                            >External Product</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a
                            href="product4_grouped.html"
                            class="menu-link menu-link_us-s"
                            >Grouped Product</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a
                            href="product5_onsale.html"
                            class="menu-link menu-link_us-s"
                            >On Sale</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a
                            href="product6_outofstock.html"
                            class="menu-link menu-link_us-s"
                            >Out of Stock</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a
                            href="shop_cart.html"
                            class="menu-link menu-link_us-s"
                            >Shopping Cart</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a
                            href="shop_checkout.html"
                            class="menu-link menu-link_us-s"
                            >Checkout</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a
                            href="shop_order_complete.html"
                            class="menu-link menu-link_us-s"
                            >Order Complete</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a
                            href="shop_order_tracking.html"
                            class="menu-link menu-link_us-s"
                            >Order Tracking</a
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>

              <li class="navigation__item">
                <a
                  href="#"
                  class="navigation__link js-nav-right d-flex align-items-center"
                  >Blog<svg
                    class="ms-auto"
                    width="7"
                    height="11"
                    viewBox="0 0 7 11"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <use href="#icon_next_sm" /></svg
                ></a>
                <div
                  class="sub-menu position-absolute top-0 start-100 w-100 d-none"
                >
                  <a
                    href="#"
                    class="navigation__link js-nav-left d-flex align-items-center border-bottom mb-2"
                    ><svg
                      class="me-2"
                      width="7"
                      height="11"
                      viewBox="0 0 7 11"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <use href="#icon_prev_sm" /></svg
                    >Blog</a
                  >
                  <ul class="list-unstyled">
                    <li class="sub-menu__item">
                      <a href="blog_list1.html" class="menu-link menu-link_us-s"
                        >Blog V1</a
                      >
                    </li>
                    <li class="sub-menu__item">
                      <a href="blog_list2.html" class="menu-link menu-link_us-s"
                        >Blog V2</a
                      >
                    </li>
                    <li class="sub-menu__item">
                      <a href="blog_list3.html" class="menu-link menu-link_us-s"
                        >Blog V3</a
                      >
                    </li>
                    <li class="sub-menu__item">
                      <a
                        href="blog_single.html"
                        class="menu-link menu-link_us-s"
                        >Blog Detail</a
                      >
                    </li>
                  </ul>
                </div>
              </li>

              <li class="navigation__item">
                <a
                  href="#"
                  class="navigation__link js-nav-right d-flex align-items-center"
                  >Pages<svg
                    class="ms-auto"
                    width="7"
                    height="11"
                    viewBox="0 0 7 11"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <use href="#icon_next_sm" /></svg
                ></a>
                <div
                  class="sub-menu position-absolute top-0 start-100 w-100 d-none"
                >
                  <a
                    href="#"
                    class="navigation__link js-nav-left d-flex align-items-center border-bottom mb-2"
                    ><svg
                      class="me-2"
                      width="7"
                      height="11"
                      viewBox="0 0 7 11"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <use href="#icon_prev_sm" /></svg
                    >Pages</a
                  >
                  <ul class="list-unstyled">
                    <li class="sub-menu__item">
                      <a
                        href="account_dashboard.html"
                        class="menu-link menu-link_us-s"
                        >My Account</a
                      >
                    </li>
                    <li class="sub-menu__item">
                      <a
                        href="login_register.html"
                        class="menu-link menu-link_us-s"
                        >Login / Register</a
                      >
                    </li>
                    <li class="sub-menu__item">
                      <a
                        href="store_location.html"
                        class="menu-link menu-link_us-s"
                        >Store Locator</a
                      >
                    </li>
                    <li class="sub-menu__item">
                      <a href="lookbook.html" class="menu-link menu-link_us-s"
                        >Lookbook</a
                      >
                    </li>
                    <li class="sub-menu__item">
                      <a href="faq.html" class="menu-link menu-link_us-s"
                        >Faq</a
                      >
                    </li>
                    <li class="sub-menu__item">
                      <a href="terms.html" class="menu-link menu-link_us-s"
                        >Terms</a
                      >
                    </li>
                    <li class="sub-menu__item">
                      <a href="404.html" class="menu-link menu-link_us-s"
                        >404 Error</a
                      >
                    </li>
                    <li class="sub-menu__item">
                      <a
                        href="coming_soon.html"
                        class="menu-link menu-link_us-s"
                        >Coming Soon</a
                      >
                    </li>
                  </ul>
                </div>
              </li>

              <li class="navigation__item">
                <a href="about.html" class="navigation__link">About</a>
              </li>

              <li class="navigation__item">
                <a href="contact.html" class="navigation__link">Contact</a>
              </li>
            </ul>
          </div>
        </div>

        <div class="border-top mt-auto pb-2">
          <div class="customer-links container mt-4 mb-2 pb-1">
            <svg
              class="d-inline-block align-middle"
              width="20"
              height="20"
              viewBox="0 0 20 20"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <use href="#icon_user" />
            </svg>
            <span
              class="d-inline-block ms-2 text-uppercase align-middle fw-medium"
              >My Account</span
            >
          </div>

          <div class="container d-flex align-items-center">
            <label
              for="footerSettingsLanguage_mobile"
              class="me-2 text-secondary"
              >Language</label
            >
            <select
              id="footerSettingsLanguage_mobile"
              class="form-select form-select-sm bg-transparent border-0"
              aria-label="Default select example"
              name="store-language"
            >
              <option class="footer-select__option" selected>
                United Kingdom | English
              </option>
              <option class="footer-select__option" value="1">
                United States | English
              </option>
              <option class="footer-select__option" value="2">German</option>
              <option class="footer-select__option" value="3">French</option>
              <option class="footer-select__option" value="4">Swedish</option>
            </select>
          </div>

          <div class="container d-flex align-items-center">
            <label
              for="footerSettingsCurrency_mobile"
              class="me-2 text-secondary"
              >Currency</label
            >
            <select
              id="footerSettingsCurrency_mobile"
              class="form-select form-select-sm bg-transparent border-0"
              aria-label="Default select example"
              name="store-language"
            >
              <option selected>$ USD</option>
              <option value="1">£ GBP</option>
              <option value="2">€ EURO</option>
            </select>
          </div>

          <ul
            class="container social-links list-unstyled d-flex flex-wrap mb-0"
          >
            <li>
              <a href="#" class="footer__social-link d-block ps-0">
                <svg
                  class="svg-icon svg-icon_facebook"
                  width="9"
                  height="15"
                  viewBox="0 0 9 15"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <use href="#icon_facebook" />
                </svg>
              </a>
            </li>
            <li>
              <a href="#" class="footer__social-link d-block">
                <svg
                  class="svg-icon svg-icon_twitter"
                  width="14"
                  height="13"
                  viewBox="0 0 14 13"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <use href="#icon_twitter" />
                </svg>
              </a>
            </li>
            <li>
              <a href="#" class="footer__social-link d-block">
                <svg
                  class="svg-icon svg-icon_instagram"
                  width="14"
                  height="13"
                  viewBox="0 0 14 13"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <use href="#icon_instagram" />
                </svg>
              </a>
            </li>
            <li>
              <a href="#" class="footer__social-link d-block">
                <svg
                  class="svg-icon svg-icon_youtube"
                  width="16"
                  height="11"
                  viewBox="0 0 16 11"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M15.0117 1.8584C14.8477 1.20215 14.3281 0.682617 13.6992 0.518555C12.5234 0.19043 7.875 0.19043 7.875 0.19043C7.875 0.19043 3.19922 0.19043 2.02344 0.518555C1.39453 0.682617 0.875 1.20215 0.710938 1.8584C0.382812 3.00684 0.382812 5.46777 0.382812 5.46777C0.382812 5.46777 0.382812 7.90137 0.710938 9.07715C0.875 9.7334 1.39453 10.2256 2.02344 10.3896C3.19922 10.6904 7.875 10.6904 7.875 10.6904C7.875 10.6904 12.5234 10.6904 13.6992 10.3896C14.3281 10.2256 14.8477 9.7334 15.0117 9.07715C15.3398 7.90137 15.3398 5.46777 15.3398 5.46777C15.3398 5.46777 15.3398 3.00684 15.0117 1.8584ZM6.34375 7.68262V3.25293L10.2266 5.46777L6.34375 7.68262Z"
                  />
                </svg>
              </a>
            </li>
            <li>
              <a href="#" class="footer__social-link d-block">
                <svg
                  class="svg-icon svg-icon_pinterest"
                  width="14"
                  height="15"
                  viewBox="0 0 14 15"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <use href="#icon_pinterest" />
                </svg>
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </div>

    <header id="header" class="header header_sticky">
      <div class="container">
        <div class="header-desk header-desk_type_1">
          <div class="logo">
            <a href="../index.html">
              <img
                src="./images/logo.png"
                alt="Uomo"
                class="logo__image d-block"
              />
            </a>
          </div>

          <nav class="navigation">
            <ul class="navigation__list list-unstyled d-flex">
              <li class="navigation__item">
                <a href="#" class="navigation__link">Home</a>
                <div class="box-menu" style="width: 600px">
                  <div class="col pe-4">
                    <ul class="sub-menu__list list-unstyled">
                      <li class="sub-menu__item">
                        <a
                          href="../Demo1/index.html"
                          class="menu-link menu-link_us-s"
                          >Home 1</a
                        >
                      </li>
                      <li class="sub-menu__item">
                        <a href="index.html" class="menu-link menu-link_us-s"
                          >Home 2</a
                        >
                      </li>
                      <li class="sub-menu__item">
                        <a
                          href="../Demo3/index.html"
                          class="menu-link menu-link_us-s"
                          >Home 3</a
                        >
                      </li>
                      <li class="sub-menu__item">
                        <a
                          href="../Demo4/index.html"
                          class="menu-link menu-link_us-s"
                          >Home 4</a
                        >
                      </li>
                      <li class="sub-menu__item">
                        <a
                          href="../Demo5/index.html"
                          class="menu-link menu-link_us-s"
                          >Home 5</a
                        >
                      </li>
                      <li class="sub-menu__item">
                        <a
                          href="../Demo6/index.html"
                          class="menu-link menu-link_us-s"
                          >Home 6</a
                        >
                      </li>
                    </ul>
                  </div>

                  <div class="col pe-4">
                    <ul class="sub-menu__list list-unstyled">
                      <li class="sub-menu__item">
                        <a
                          href="../Demo7/index.html"
                          class="menu-link menu-link_us-s"
                          >Home 7</a
                        >
                      </li>
                      <li class="sub-menu__item">
                        <a
                          href="../Demo8/index.html"
                          class="menu-link menu-link_us-s"
                          >Home 8</a
                        >
                      </li>
                      <li class="sub-menu__item">
                        <a
                          href="../Demo9/index.html"
                          class="menu-link menu-link_us-s"
                          >Home 9</a
                        >
                      </li>
                      <li class="sub-menu__item">
                        <a
                          href="../Demo10/index.html"
                          class="menu-link menu-link_us-s"
                          >Home 10</a
                        >
                      </li>
                      <li class="sub-menu__item">
                        <a
                          href="../Demo11/index.html"
                          class="menu-link menu-link_us-s"
                          >Home 11</a
                        >
                      </li>
                      <li class="sub-menu__item">
                        <a
                          href="../Demo12/index.html"
                          class="menu-link menu-link_us-s"
                          >Home 12</a
                        >
                      </li>
                    </ul>
                  </div>

                  <div class="col">
                    <ul class="sub-menu__list list-unstyled">
                      <li class="sub-menu__item">
                        <a
                          href="../Demo13/index.html"
                          class="menu-link menu-link_us-s"
                          >Home 13</a
                        >
                      </li>
                      <li class="sub-menu__item">
                        <a
                          href="../Demo14/index.html"
                          class="menu-link menu-link_us-s"
                          >Home 14</a
                        >
                      </li>
                      <li class="sub-menu__item">
                        <a
                          href="../Demo15/index.html"
                          class="menu-link menu-link_us-s"
                          >Home 15</a
                        >
                      </li>
                      <li class="sub-menu__item">
                        <a
                          href="../Demo16/index.html"
                          class="menu-link menu-link_us-s"
                          >Home 16</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
              <li class="navigation__item">
                <a href="#" class="navigation__link">Shop</a>
                <div class="mega-menu">
                  <div class="container d-flex">
                    <div class="col pe-4">
                      <a href="#" class="sub-menu__title">Shop List</a>
                      <ul class="sub-menu__list list-unstyled">
                        <li class="sub-menu__item">
                          <a href="shop1.html" class="menu-link menu-link_us-s"
                            >Shop List V1</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a href="shop2.html" class="menu-link menu-link_us-s"
                            >Shop List V2</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a href="shop3.html" class="menu-link menu-link_us-s"
                            >Shop List V3</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a href="shop4.html" class="menu-link menu-link_us-s"
                            >Shop List V4</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a href="shop5.html" class="menu-link menu-link_us-s"
                            >Shop List V5</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a href="shop6.html" class="menu-link menu-link_us-s"
                            >Shop List V6</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a href="shop7.html" class="menu-link menu-link_us-s"
                            >Shop List V7</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a href="shop8.html" class="menu-link menu-link_us-s"
                            >Shop List V8</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a href="shop9.html" class="menu-link menu-link_us-s"
                            >Shop List V9</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a href="shop10.html" class="menu-link menu-link_us-s"
                            >Shop Item Style</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a href="shop11.html" class="menu-link menu-link_us-s"
                            >Horizontal Scroll</a
                          >
                        </li>
                      </ul>
                    </div>

                    <div class="col pe-4">
                      <a href="#" class="sub-menu__title">Shop Detail</a>
                      <ul class="sub-menu__list list-unstyled">
                        <li class="sub-menu__item">
                          <a
                            href="product2_variable.html"
                            class="menu-link menu-link_us-s"
                            >Shop Detail V1</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a
                            href="product7_v2.html"
                            class="menu-link menu-link_us-s"
                            >Shop Detail V2</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a
                            href="product8_v3.html"
                            class="menu-link menu-link_us-s"
                            >Shop Detail V3</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a
                            href="product9_v4.html"
                            class="menu-link menu-link_us-s"
                            >Shop Detail V4</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a
                            href="product10_v5.html"
                            class="menu-link menu-link_us-s"
                            >Shop Detail V5</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a
                            href="product11_v6.html"
                            class="menu-link menu-link_us-s"
                            >Shop Detail V6</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a
                            href="product12_v7.html"
                            class="menu-link menu-link_us-s"
                            >Shop Detail V7</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a
                            href="product13_v8.html"
                            class="menu-link menu-link_us-s"
                            >Shop Detail V8</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a
                            href="product14_v9.html"
                            class="menu-link menu-link_us-s"
                            >Shop Detail V9</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a
                            href="product15_v10.html"
                            class="menu-link menu-link_us-s"
                            >Shop Detail V10</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a
                            href="product16_v11.html"
                            class="menu-link menu-link_us-s"
                            >Shop Detail V11</a
                          >
                        </li>
                      </ul>
                    </div>

                    <div class="col pe-4">
                      <a href="#" class="sub-menu__title">Other Pages</a>
                      <ul class="sub-menu__list list-unstyled">
                        <li class="sub-menu__item">
                          <a href="shop12.html" class="menu-link menu-link_us-s"
                            >Collection Grid</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a
                            href="product1_simple.html"
                            class="menu-link menu-link_us-s"
                            >Simple Product</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a
                            href="product2_variable.html"
                            class="menu-link menu-link_us-s"
                            >Variable Product</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a
                            href="product3_external.html"
                            class="menu-link menu-link_us-s"
                            >External Product</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a
                            href="product4_grouped.html"
                            class="menu-link menu-link_us-s"
                            >Grouped Product</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a
                            href="product5_onsale.html"
                            class="menu-link menu-link_us-s"
                            >On Sale</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a
                            href="product6_outofstock.html"
                            class="menu-link menu-link_us-s"
                            >Out of Stock</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a
                            href="shop_cart.html"
                            class="menu-link menu-link_us-s"
                            >Shopping Cart</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a
                            href="shop_checkout.html"
                            class="menu-link menu-link_us-s"
                            >Checkout</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a
                            href="shop_order_complete.html"
                            class="menu-link menu-link_us-s"
                            >Order Complete</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a
                            href="shop_order_tracking.html"
                            class="menu-link menu-link_us-s"
                            >Order Tracking</a
                          >
                        </li>
                      </ul>
                    </div>

                    <div class="mega-menu__media col">
                      <div class="position-relative">
                        <img
                          loading="lazy"
                          class="mega-menu__img"
                          src="./images/mega-menu-item.jpg"
                          alt="New Horizons"
                        />
                        <div
                          class="mega-menu__media-content content_abs content_left content_bottom"
                        >
                          <h3>NEW</h3>
                          <h3 class="mb-0">HORIZONS</h3>
                          <a
                            href="#"
                            class="btn-link default-underline fw-medium"
                            >SHOP NOW</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="navigation__item">
                <a href="#" class="navigation__link">Blog</a>
                <ul class="default-menu list-unstyled">
                  <li class="sub-menu__item">
                    <a href="blog_list1.html" class="menu-link menu-link_us-s"
                      >Blog V1</a
                    >
                  </li>
                  <li class="sub-menu__item">
                    <a href="blog_list2.html" class="menu-link menu-link_us-s"
                      >Blog V2</a
                    >
                  </li>
                  <li class="sub-menu__item">
                    <a href="blog_list3.html" class="menu-link menu-link_us-s"
                      >Blog V3</a
                    >
                  </li>
                  <li class="sub-menu__item">
                    <a href="blog_single.html" class="menu-link menu-link_us-s"
                      >Blog Detail</a
                    >
                  </li>
                </ul>
              </li>
              <li class="navigation__item">
                <a href="#" class="navigation__link">Pages</a>
                <ul class="default-menu list-unstyled">
                  <li class="sub-menu__item">
                    <a
                      href="account_dashboard.html"
                      class="menu-link menu-link_us-s"
                      >My Account</a
                    >
                  </li>
                  <li class="sub-menu__item">
                    <a
                      href="login_register.html"
                      class="menu-link menu-link_us-s"
                      >Login / Register</a
                    >
                  </li>
                  <li class="sub-menu__item">
                    <a
                      href="store_location.html"
                      class="menu-link menu-link_us-s"
                      >Store Locator</a
                    >
                  </li>
                  <li class="sub-menu__item">
                    <a href="lookbook.html" class="menu-link menu-link_us-s"
                      >Lookbook</a
                    >
                  </li>
                  <li class="sub-menu__item">
                    <a href="faq.html" class="menu-link menu-link_us-s">Faq</a>
                  </li>
                  <li class="sub-menu__item">
                    <a href="terms.html" class="menu-link menu-link_us-s"
                      >Terms</a
                    >
                  </li>
                  <li class="sub-menu__item">
                    <a href="404.html" class="menu-link menu-link_us-s"
                      >404 Error</a
                    >
                  </li>
                  <li class="sub-menu__item">
                    <a href="coming_soon.html" class="menu-link menu-link_us-s"
                      >Coming Soon</a
                    >
                  </li>
                </ul>
              </li>
              <li class="navigation__item">
                <a href="about.html" class="navigation__link">About</a>
              </li>
              <li class="navigation__item">
                <a href="contact.html" class="navigation__link">Contact</a>
              </li>
            </ul>
          </nav>

          <div class="header-tools d-flex align-items-center">
            <div class="header-tools__item hover-container">
              <div class="js-hover__open position-relative">
                <a class="js-search-popup search-field__actor" href="#">
                  <svg
                    class="d-block"
                    width="20"
                    height="20"
                    viewBox="0 0 20 20"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <use href="#icon_search" />
                  </svg>
                  <i class="btn-icon btn-close-lg"></i>
                </a>
              </div>

              <div class="search-popup js-hidden-content">
                <form
                  action="https://uomo-html.flexkitux.com/Demo2/search_result.html"
                  method="GET"
                  class="search-field container"
                >
                  <p class="text-uppercase text-secondary fw-medium mb-4">
                    What are you looking for?
                  </p>
                  <div class="position-relative">
                    <input
                      class="search-field__input search-popup__input w-100 fw-medium"
                      type="text"
                      name="search-keyword"
                      placeholder="Search products"
                    />
                    <button class="btn-icon search-popup__submit" type="submit">
                      <svg
                        class="d-block"
                        width="20"
                        height="20"
                        viewBox="0 0 20 20"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <use href="#icon_search" />
                      </svg>
                    </button>
                    <button
                      class="btn-icon btn-close-lg search-popup__reset"
                      type="reset"
                    ></button>
                  </div>

                  <div class="search-popup__results">
                    <div class="sub-menu search-suggestion">
                      <h6 class="sub-menu__title fs-base">Quicklinks</h6>
                      <ul class="sub-menu__list list-unstyled">
                        <li class="sub-menu__item">
                          <a href="shop2.html" class="menu-link menu-link_us-s"
                            >New Arrivals</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a href="#" class="menu-link menu-link_us-s"
                            >Dresses</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a href="shop3.html" class="menu-link menu-link_us-s"
                            >Accessories</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a href="#" class="menu-link menu-link_us-s"
                            >Footwear</a
                          >
                        </li>
                        <li class="sub-menu__item">
                          <a href="#" class="menu-link menu-link_us-s"
                            >Sweatshirt</a
                          >
                        </li>
                      </ul>
                    </div>

                    <div class="search-result row row-cols-5"></div>
                  </div>
                </form>
              </div>
            </div>

            <div class="header-tools__item hover-container">
              <a
                class="header-tools__item js-open-aside"
                href="#"
                data-aside="customerForms"
              >
                <svg
                  width="20"
                  height="20"
                  viewBox="0 0 20 20"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <use href="#icon_user" />
                </svg>
              </a>
            </div>

            <a
              href="#"
              class="header-tools__item header-tools__cart js-open-aside"
              data-aside="cartDrawer"
            >
              <svg
                class="d-block"
                width="20"
                height="20"
                viewBox="0 0 20 20"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <use href="#icon_cart" />
              </svg>
              <span
                class="cart-amount d-block position-absolute js-cart-items-count"
                >3</span
              >
            </a>

            <a class="header-tools__item" href="#">
              <svg
                width="20"
                height="20"
                viewBox="0 0 20 20"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <use href="#icon_heart" />
              </svg>
            </a>

            <a
              class="header-tools__item"
              href="#"
              data-bs-toggle="modal"
              data-bs-target="#siteMap"
            >
              <svg
                class="nav-icon"
                width="25"
                height="18"
                viewBox="0 0 25 18"
                xmlns="http://www.w3.org/2000/svg"
              >
                <use href="#icon_nav" />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </header>

    <main>
      <section class="full-width_padding">
        <div class="full-width_border border-2" style="border-color: #eee">
          <div class="shop-banner position-relative">
            <div class="background-img" style="background-color: #eee">
              <img
                loading="lazy"
                src="./images/slideshow-pattern.png"
                width="1759"
                height="420"
                alt="Pattern"
                class="slideshow-bg__img object-fit-cover"
              />
            </div>

            <div class="shop-categories position-relative">
              <h2
                class="h1 stroke-text smooth-16 text-uppercase text-center fw-bold mb-3 mb-xl-4"
              >
                Shop
              </h2>

              <div
                class="shop-categories__list d-flex align-items-center flex-wrap justify-content-center"
              >
                <a href="#" class="d-block shop-categories__item_sm mb-3">
                  <div
                    class="shop-categories__item-img rounded-circle bg-white d-flex align-items-center justify-content-center"
                  >
                    <svg
                      width="39"
                      height="41"
                      viewBox="0 0 39 41"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M38.7694 34.3201L34.6493 16.5571H29.6352V10.1341C29.6351 4.5462 25.089 0 19.5009 0C13.9129 0 9.36679 4.5462 9.36679 10.1341V16.5571H4.35261L0.232584 34.3201C-0.144985 35.9483 0.234666 37.6325 1.27448 38.941C2.3143 40.2496 3.8691 41 5.54041 41H33.4615C35.1328 41 36.6877 40.2495 37.7275 38.941C38.7673 37.6325 39.147 35.9483 38.7694 34.3201ZM11.7693 10.1341C11.7693 5.87078 15.2377 2.40243 19.501 2.40243C23.7642 2.40243 27.2327 5.87086 27.2327 10.1341V16.5571H11.7693V10.1341ZM35.8465 37.4464C35.2652 38.178 34.3959 38.5977 33.4615 38.5977H5.54041C4.60598 38.5977 3.73673 38.1781 3.15544 37.4464C2.57415 36.7148 2.36187 35.7732 2.57303 34.8629L6.26176 18.9596H9.36695V20.4671H8.52245V22.8696H12.614V20.4671H11.7695V18.9596H27.2328V20.4671H26.3882V22.8696H30.4799V20.4671H29.6353V18.9596H32.7405L36.4292 34.8629C36.6401 35.7732 36.4278 36.7148 35.8465 37.4464Z"
                        fill="#767676"
                      />
                    </svg>
                  </div>
                  <h6 class="pt-1 mt-3 mt-xl-4 mb-0 text-center">Handbags</h6>
                </a>

                <a href="#" class="d-block shop-categories__item_sm mb-3">
                  <div
                    class="shop-categories__item-img rounded-circle bg-white d-flex align-items-center justify-content-center"
                  >
                    <svg
                      width="41"
                      height="31"
                      viewBox="0 0 41 31"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M38.8474 22.6925L21.7012 12.7564V12.0171C21.7012 11.174 22.1823 10.3898 22.9568 9.97052C24.7018 9.026 25.739 7.20671 25.6637 5.22269C25.5618 2.5408 23.3815 0.360109 20.7002 0.25833C19.2814 0.203877 17.9377 0.716056 16.9167 1.69885C15.8951 2.68237 15.3325 4.00494 15.3325 5.42281C15.3325 6.08617 15.8703 6.62398 16.5336 6.62398C17.197 6.62398 17.7348 6.08617 17.7348 5.42281C17.7348 4.66383 18.036 3.95602 18.5828 3.4295C19.1291 2.90371 19.8478 2.62928 20.609 2.65891C22.0428 2.71336 23.2086 3.87954 23.2631 5.31382C23.3035 6.37702 22.7479 7.35181 21.8133 7.85782C20.2623 8.69736 19.2988 10.2911 19.2988 12.0171V12.7564L2.15258 22.6925C0.824805 23.462 0 24.8935 0 26.4283C0 28.8089 1.93645 30.7456 4.31669 30.7456H36.6833C39.0635 30.7456 41 28.8087 41 26.4282C41 24.8934 40.1752 23.462 38.8474 22.6925V22.6925ZM36.6833 28.3432H4.31669C3.2611 28.3432 2.40234 27.4841 2.40234 26.4282C2.40234 25.7474 2.76814 25.1124 3.35712 24.7712L20.5 14.837L37.6429 24.7712C38.2318 25.1125 38.5977 25.7474 38.5977 26.4283C38.5977 27.4842 37.7389 28.3432 36.6833 28.3432V28.3432Z"
                        fill="#767676"
                      />
                    </svg>
                  </div>
                  <h6 class="pt-1 mt-3 mt-xl-4 mb-0 text-center">Clothings</h6>
                </a>

                <a href="#" class="d-block shop-categories__item_sm mb-3">
                  <div
                    class="shop-categories__item-img rounded-circle bg-white d-flex align-items-center justify-content-center"
                  >
                    <svg
                      width="37"
                      height="41"
                      viewBox="0 0 37 41"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M13.6953 20.8203C14.1376 20.8203 14.4961 20.4617 14.4961 20.0195V15.2148C14.4961 14.7727 14.1376 14.4141 13.6953 14.4141C13.253 14.4141 12.8945 14.7727 12.8945 15.2148V20.0195C12.8945 20.4617 13.253 20.8203 13.6953 20.8203Z"
                        fill="#222222"
                      />
                      <path
                        d="M23.3047 14.4141C22.8625 14.4141 22.5039 14.7727 22.5039 15.2148V20.0195C22.5039 20.4617 22.8625 20.8203 23.3047 20.8203C23.7469 20.8203 24.1055 20.4617 24.1055 20.0195V15.2148C24.1055 14.7727 23.7469 14.4141 23.3047 14.4141Z"
                        fill="#222222"
                      />
                      <path
                        d="M0.882812 20.0195V37.7969C0.882812 38.2391 1.24132 38.5977 1.68359 38.5977H5.6875V40.1992C5.6875 40.6414 6.04601 41 6.48828 41H30.5117C30.9539 41 31.3125 40.6414 31.3125 40.1992V38.5977H35.3164C35.7586 38.5977 36.1172 38.2391 36.1172 37.7969V20.0195C36.1172 14.4201 34.2108 9.10296 28.8385 7.61239C28.8857 7.34573 28.9102 7.07666 28.9102 6.80664C28.9102 4.91632 27.7769 3.16693 25.7191 1.88079C23.7785 0.668012 21.2146 0 18.5 0C15.7853 0 13.2215 0.668012 11.2809 1.88079C9.22311 3.16693 8.08984 4.91632 8.08984 6.80664C8.08984 7.07714 8.11443 7.34661 8.16167 7.61375C2.79772 9.1064 0.882812 14.4268 0.882812 20.0195ZM2.48438 36.9961V33.793H5.6875V36.9961H2.48438ZM16.5652 8.55883C15.2823 7.63649 14.4961 7.00035 14.4961 5.60547C14.4961 3.39771 16.2922 1.60156 18.5 1.60156C20.7078 1.60156 22.5039 3.39771 22.5039 5.60547C22.5039 7.00043 21.7177 7.63649 20.4348 8.55883C19.7825 9.02793 19.0449 9.55869 18.5 10.3012C17.9551 9.55869 17.2175 9.02793 16.5652 8.55883ZM24.9062 39.3984H19.3008V31.3906H22.7213C23.0484 33.0372 23.7946 34.5165 24.9062 35.717V39.3984ZM17.6992 39.3984H12.0938V35.717C13.2054 34.5165 13.9516 33.0371 14.2788 31.3906H17.6992V39.3984ZM31.3125 36.9961V33.793H34.5156V36.9961H31.3125ZM27.3086 6.80664C27.3086 8.18679 26.365 9.33222 25.2443 10.1258C24.8833 10.3813 24.798 10.8812 25.0535 11.2421C25.3099 11.6041 25.8098 11.6876 26.1698 11.4328C26.9582 10.8745 27.5844 10.2463 28.0407 9.55957C29.0734 10.3037 29.7109 11.5145 29.7109 12.8125V18.4979C29.7109 18.9401 30.0695 19.2987 30.5117 19.2987C30.9539 19.2987 31.3125 18.9401 31.3125 18.4979V12.8125C31.3125 11.8906 31.0822 11.0006 30.6672 10.2109C33.9462 12.5069 34.5156 17.1078 34.5156 20.0195V32.1914H31.3125V25.705C31.3125 25.2628 30.9539 24.9042 30.5117 24.9042C30.0695 24.9042 29.7109 25.2628 29.7109 25.705V39.3984H26.5078V35.3945C26.5078 35.1822 26.4234 34.9785 26.2733 34.8283C25.1236 33.6786 24.4059 32.1791 24.198 30.4919C24.1485 30.0906 23.8076 29.7891 23.4032 29.7891H19.3008V12.8125C19.3008 11.4175 20.087 10.7815 21.3698 9.85914C22.5886 8.98284 24.1055 7.89226 24.1055 5.60547C24.1055 4.40133 23.7225 3.28569 23.0738 2.37103C23.7225 2.60903 24.3264 2.89899 24.8702 3.23892C26.4427 4.22172 27.3086 5.48871 27.3086 6.80664ZM12.1297 3.23892C12.6736 2.89899 13.2775 2.60903 13.9262 2.37103C13.2775 3.28569 12.8945 4.40133 12.8945 5.60547C12.8945 7.89226 14.4114 8.98284 15.6302 9.85914C16.913 10.7815 17.6992 11.4176 17.6992 12.8125V29.7891H13.5968C13.1924 29.7891 12.8515 30.0906 12.802 30.4918C12.5941 32.179 11.8764 33.6785 10.7267 34.8282C10.5766 34.9785 10.4922 35.1822 10.4922 35.3945V39.3984H7.28906V12.8125C7.28906 11.5144 7.92664 10.3036 8.95957 9.55949C9.41634 10.247 10.0423 10.8749 10.8302 11.4329C11.1911 11.6884 11.6909 11.603 11.9465 11.2422C12.202 10.8813 12.1167 10.3815 11.7557 10.1259C10.6319 9.32998 9.69141 8.18438 9.69141 6.80664C9.69141 5.48871 10.5573 4.22172 12.1297 3.23892ZM6.33069 10.2148C5.91708 11.0035 5.6875 11.8922 5.6875 12.8125V32.1914H2.48438V20.0195C2.48438 17.1101 3.05357 12.5126 6.33069 10.2148Z"
                        fill="#222222"
                      />
                      <path
                        d="M30.5117 22.9023C30.954 22.9023 31.3125 22.5437 31.3125 22.1015C31.3125 21.6592 30.954 21.3007 30.5117 21.3007C30.0695 21.3007 29.7109 21.6592 29.7109 22.1015C29.7109 22.5437 30.0695 22.9023 30.5117 22.9023Z"
                        fill="#222222"
                      />
                    </svg>
                  </div>
                  <h6 class="pt-1 mt-3 mt-xl-4 mb-0 text-center">Jackets</h6>
                </a>

                <a href="#" class="d-block shop-categories__item_sm mb-3">
                  <div
                    class="shop-categories__item-img rounded-circle bg-white d-flex align-items-center justify-content-center"
                  >
                    <svg
                      width="25"
                      height="41"
                      viewBox="0 0 25 41"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M23.2219 19.4518H22.3701C22.0218 16.2791 20.3106 13.5103 17.8356 11.7464V1.20078C17.8356 0.537627 17.298 0 16.6349 0H6.3776C5.71445 0 5.17682 0.537627 5.17682 1.20078V11.7464C2.39415 13.7297 0.576172 16.9828 0.576172 20.6526C0.576172 24.3224 2.39423 27.5756 5.17682 29.5588V39.7992C5.17682 40.4624 5.71445 41 6.3776 41H16.6349C17.298 41 17.8356 40.4624 17.8356 39.7992V29.5588C20.3106 27.7949 22.0218 25.0262 22.3701 21.8534H23.2219C23.8851 21.8534 24.4227 21.3158 24.4227 20.6526C24.4227 19.9895 23.8851 19.4518 23.2219 19.4518ZM7.57838 2.40155H15.4341V10.453C14.2144 9.98173 12.8901 9.7226 11.5063 9.7226C10.1224 9.7226 8.79804 9.98173 7.57846 10.4531V2.40155H7.57838ZM15.4341 38.5984H7.57838V30.8522C8.79804 31.3235 10.1223 31.5827 11.5062 31.5827C12.89 31.5827 14.2144 31.3236 15.434 30.8523V38.5984H15.4341ZM11.5063 29.1811C6.80364 29.1811 2.97772 25.3553 2.97772 20.6525C2.97772 15.9498 6.80356 12.124 11.5063 12.124C16.1943 12.124 20.0105 15.9261 20.0343 20.6086C20.0337 20.6233 20.032 20.6376 20.032 20.6525C20.032 20.6674 20.0337 20.6818 20.0343 20.6965C20.0105 25.379 16.1942 29.1811 11.5063 29.1811Z"
                        fill="#767676"
                      />
                      <path
                        d="M11.4874 14.3921H11.4827C10.8195 14.3947 10.284 14.9342 10.2865 15.5975L10.3039 20.2002L7.87699 22.9477C7.43798 23.4448 7.48497 24.2036 7.98201 24.6427C8.2104 24.8444 8.49402 24.9435 8.77653 24.9435C9.1089 24.9435 9.43968 24.8064 9.67695 24.5377L12.4065 21.4476C12.6014 21.227 12.7083 20.9425 12.7073 20.6482L12.6881 15.5884C12.6856 14.9267 12.1485 14.3921 11.4874 14.3921Z"
                        fill="#767676"
                      />
                      <path
                        d="M11.5056 7.2639C12.1731 7.2639 12.7143 6.72274 12.7143 6.0552C12.7143 5.38765 12.1731 4.8465 11.5056 4.8465C10.838 4.8465 10.2969 5.38765 10.2969 6.0552C10.2969 6.72274 10.838 7.2639 11.5056 7.2639Z"
                        fill="#767676"
                      />
                    </svg>
                  </div>
                  <h6 class="pt-1 mt-3 mt-xl-4 mb-0 text-center">Watches</h6>
                </a>

                <a href="#" class="d-block shop-categories__item_sm mb-3">
                  <div
                    class="shop-categories__item-img rounded-circle bg-white d-flex align-items-center justify-content-center"
                  >
                    <svg
                      width="37"
                      height="41"
                      viewBox="0 0 37 41"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M28.6121 19.3041C24.9455 15.2421 24.8768 14.8083 26.7742 11.7422C27.4306 10.6814 28.1094 9.58439 28.1094 8.32812C28.1094 6.3112 25.9705 4.18232 24.9062 3.24797V1.28125C24.9062 0.57368 24.3327 0 23.625 0C22.9173 0 22.3438 0.57368 22.3438 1.28125V2.69903C20.6402 3.06563 19.339 4.10504 18.5 4.98839C17.661 4.10504 16.3598 3.06563 14.6562 2.69903V1.28125C14.6562 0.57368 14.0827 0 13.375 0C12.6673 0 12.0938 0.57368 12.0938 1.28125V3.24797C11.0295 4.18232 8.89062 6.31128 8.89062 8.32812C8.89062 9.58439 9.56945 10.6814 10.2258 11.7422C12.1293 14.8181 12.0449 15.2528 8.38789 19.3041C5.08531 22.9625 0.5625 27.9728 0.5625 36.5156C0.5625 36.8555 0.697512 37.1813 0.937826 37.4215C1.30402 37.7879 4.9085 41 18.5 41C32.0915 41 35.696 37.7879 36.0622 37.4215C36.3025 37.1813 36.4375 36.8554 36.4375 36.5156C36.4375 27.9728 31.9147 22.9625 28.6121 19.3041ZM13.8081 5.15239C15.9836 5.4277 17.389 7.68598 17.4013 7.70608C17.9051 8.5457 19.1051 8.52864 19.5959 7.71048C19.6108 7.68622 21.0162 5.4277 23.1917 5.15239C24.3885 6.19917 25.5469 7.62384 25.5469 8.32812C25.5469 9.42095 23.7365 11.1644 23.1637 13.373H13.8363C13.2685 11.1836 11.4531 9.41046 11.4531 8.32812C11.4531 7.62376 12.6119 6.19869 13.8081 5.15239ZM28.7233 37.5914C28.5061 31.407 26.9546 27.2335 25.4334 23.943C25.1366 23.3007 24.3748 23.0209 23.7328 23.3176C23.0905 23.6146 22.8104 24.3759 23.1074 25.0182C24.5449 28.1279 26.0116 32.0871 26.172 38.002C24.4107 38.2265 22.2997 38.3862 19.7812 38.427V24.9844C19.7812 24.2768 19.2077 23.7031 18.5 23.7031C17.7923 23.7031 17.2188 24.2768 17.2188 24.9844V38.4271C14.7003 38.3863 12.5893 38.2267 10.828 38.0021C10.9884 32.0871 12.4551 28.128 13.8926 25.0183C14.1896 24.376 13.9095 23.6146 13.2672 23.3177C12.6249 23.0208 11.8635 23.3008 11.5666 23.9431C10.0455 27.2336 8.494 31.4071 8.27675 37.5915C5.33195 37.0059 3.79549 36.2633 3.13493 35.8665C3.47542 24.7694 12.5146 20.6488 13.8452 15.9355H23.1549C24.4861 20.6509 33.5247 24.769 33.8652 35.8665C33.2045 36.2633 31.668 37.0059 28.7233 37.5914Z"
                        fill="#767676"
                      />
                    </svg>
                  </div>
                  <h6 class="pt-1 mt-3 mt-xl-4 mb-0 text-center">Dresses</h6>
                </a>

                <a href="#" class="d-block shop-categories__item_sm mb-3">
                  <div
                    class="shop-categories__item-img rounded-circle bg-white d-flex align-items-center justify-content-center"
                  >
                    <svg
                      width="41"
                      height="23"
                      viewBox="0 0 41 23"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M35.3251 8.41683C27.1924 5.16382 21.8243 1.23823 21.2463 0.89125C21.049 0.759681 20.8173 0.689453 20.5801 0.689453H15.6152C14.9519 0.689453 14.4141 1.22726 14.4141 1.89062V4.29297C14.4141 4.9553 13.8752 5.49414 13.2129 5.49414H8.4082C7.74588 5.49414 7.20703 4.9553 7.20703 4.29297C7.20703 2.30599 5.59049 0.689453 3.60352 0.689453H1.20117C0.537805 0.689453 0 1.22726 0 1.89062V21.1094C0 21.7727 0.537805 22.3105 1.20117 22.3105H39.7988C40.4622 22.3105 41 21.7727 41 21.1094V14.7529C41 9.61488 35.8997 8.80817 35.3251 8.41683ZM3.60352 3.0918C4.26584 3.0918 4.80469 3.63064 4.80469 4.29297C4.80469 6.27995 6.42122 7.89648 8.4082 7.89648H13.2129C15.1999 7.89648 16.8164 6.27995 16.8164 4.29297V3.0918H20.2164C20.6275 3.36486 20.9839 3.60702 21.5822 3.99452L19.7307 5.846C19.2616 6.3151 19.2616 7.0756 19.7307 7.5447C20.1997 8.0138 20.9603 8.01388 21.4294 7.5447L23.6746 5.29947C24.4712 5.77874 25.2769 6.24327 26.0911 6.69267L24.5355 8.24835C24.0664 8.71745 24.0664 9.47795 24.5355 9.94704C25.0045 10.4161 25.7651 10.4162 26.2342 9.94704L28.3103 7.87086C29.1575 8.302 30.0127 8.71713 30.8753 9.11551L29.3401 10.6507C28.871 11.1198 28.871 11.8803 29.3401 12.3494C29.8092 12.8185 30.5697 12.8186 31.0388 12.3494L33.2341 10.1541C34.3296 10.6147 34.6266 10.7213 36.3324 11.4072C37.7085 11.9576 38.5977 13.2709 38.5977 14.7529V15.1035H9.48854C8.93047 12.3655 6.50395 10.2988 3.60352 10.2988H2.40234V3.0918H3.60352ZM2.40234 12.7012H3.60352C5.16944 12.7012 6.50459 13.7055 7.00043 15.1035H2.40234V12.7012ZM2.40234 19.9082V17.5059H38.5977V19.9082H2.40234Z"
                        fill="#767676"
                      />
                    </svg>
                  </div>
                  <h6 class="pt-1 mt-3 mt-xl-4 mb-0 text-center">Shoes</h6>
                </a>

                <a href="#" class="d-block shop-categories__item_sm mb-3">
                  <div
                    class="shop-categories__item-img rounded-circle bg-white d-flex align-items-center justify-content-center"
                  >
                    <svg
                      width="29"
                      height="41"
                      viewBox="0 0 29 41"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M27.1145 0H1.88385C1.23065 0 0.701172 0.529557 0.701172 1.18267V39.8173C0.701172 40.4705 1.23073 41 1.88385 41H9.7685C10.3337 41 10.8198 40.6002 10.929 40.0456L14.4992 21.8965L18.0695 40.0457C18.1786 40.6003 18.6648 41.0001 19.23 41.0001H27.1146C27.7678 41.0001 28.2973 40.4705 28.2973 39.8174V1.18267C28.2973 0.529557 27.7677 0 27.1145 0ZM3.06652 7.49035H5.43187V10.4055L3.06652 11.9824V7.49035ZM25.9319 38.6347H20.2026L15.6595 15.5409C15.5505 14.9864 15.0643 14.5866 14.4991 14.5866C13.9339 14.5866 13.4478 14.9864 13.3386 15.5409L8.79563 38.6347H3.06636V14.8252L7.27046 12.0224C7.5995 11.8032 7.79713 11.4339 7.79713 11.0384V7.49035H21.201V11.0384C21.201 11.434 21.3986 11.8032 21.7277 12.0224L25.9318 14.8252V38.6347H25.9319ZM25.9319 11.9825L23.5665 10.4056V7.49035H25.9319V11.9825ZM25.9319 5.125H3.06652V2.36535H25.9319V5.125Z"
                        fill="#767676"
                      />
                    </svg>
                  </div>
                  <h6 class="pt-1 mt-3 mt-xl-4 mb-0 text-center">Jeans</h6>
                </a>

                <a href="#" class="d-block shop-categories__item_sm mb-3">
                  <div
                    class="shop-categories__item-img rounded-circle bg-white d-flex align-items-center justify-content-center"
                  >
                    <svg
                      width="41"
                      height="39"
                      viewBox="0 0 41 39"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M40.9105 13.9113L36.8653 6.09044C35.7365 3.90815 33.7089 2.37353 31.302 1.88009L25.1452 0.617818C25.0923 0.607008 25.0384 0.601562 24.9844 0.601562H16.0156C15.9616 0.601562 15.9077 0.607008 15.8548 0.617898L9.698 1.88017C7.29109 2.37361 5.26336 3.90815 4.13465 6.09044L0.0895085 13.9113C-0.012431 14.1084 -0.0280462 14.3391 0.0465065 14.5482C0.121059 14.7573 0.279053 14.926 0.482852 15.0142L6.39206 17.5704C6.79021 17.7427 7.25314 17.5665 7.43612 17.1731L7.53733 16.9554V37.5977C7.53733 38.0399 7.89584 38.3984 8.33812 38.3984H16.8965C17.3387 38.3984 17.6972 38.0399 17.6972 37.5977C17.6972 37.1554 17.3387 36.7969 16.8965 36.7969H9.1389V11.6487C9.1389 11.2064 8.78039 10.8479 8.33812 10.8479C7.89584 10.8479 7.53733 11.2064 7.53733 11.6487V13.1569L6.31254 15.7909L1.90632 13.8848L5.55724 6.82628C6.46261 5.07585 8.08907 3.84489 10.0197 3.44914L15.3036 2.36576C15.4981 3.4256 16.0108 4.39999 16.794 5.17042C17.7885 6.14865 19.1047 6.6875 20.5 6.6875C23.0732 6.6875 25.2381 4.81728 25.695 2.36544L30.9804 3.44906C32.9109 3.84481 34.5374 5.07577 35.4429 6.8262L39.0938 13.8848L34.6876 15.7909L33.4627 13.1569V11.6486C33.4627 11.2063 33.1041 10.8478 32.6619 10.8478C32.2197 10.8478 31.8611 11.2063 31.8611 11.6486V36.7969H24.1035C23.6613 36.7969 23.3027 37.1554 23.3027 37.5977C23.3027 38.0399 23.6613 38.3984 24.1035 38.3984H32.6618C33.104 38.3984 33.4626 38.0399 33.4626 37.5977V16.9553L33.5639 17.1731C33.6993 17.4643 33.988 17.6364 34.2904 17.6364C34.3966 17.6364 34.5044 17.6152 34.608 17.5704L40.5172 15.0142C40.7209 14.926 40.8789 14.7573 40.9535 14.5482C41.028 14.3391 41.0124 14.1084 40.9105 13.9113ZM20.5 5.08594C18.756 5.08594 17.2744 3.84673 16.905 2.20312H24.0948C23.7262 3.84793 22.248 5.08594 20.5 5.08594Z"
                        fill="#767676"
                      />
                      <path
                        d="M23.5193 19.1339C23.6757 19.2903 23.8806 19.3684 24.0855 19.3684C24.2904 19.3684 24.4953 19.2903 24.6517 19.1339L26.0464 17.7392L27.4412 19.1339C27.5976 19.2903 27.8025 19.3684 28.0074 19.3684C28.2123 19.3684 28.4172 19.2903 28.5736 19.1339C28.8863 18.8212 28.8863 18.3141 28.5736 18.0013L27.1789 16.6066L28.0648 15.7207C28.6039 15.1816 28.9008 14.4648 28.9008 13.7023C28.9008 12.9398 28.6039 12.223 28.0648 11.6839C27.5257 11.1447 26.8089 10.8479 26.0464 10.8479C25.284 10.8479 24.5672 11.1448 24.028 11.6839C22.9151 12.7968 22.9151 14.6077 24.028 15.7207L24.9139 16.6066L23.5192 18.0013C23.2066 18.3141 23.2066 18.8212 23.5193 19.1339ZM25.1605 12.8163C25.3972 12.5797 25.7118 12.4494 26.0464 12.4494C26.3811 12.4494 26.6956 12.5797 26.9323 12.8164C27.1691 13.0531 27.2993 13.3677 27.2993 13.7023C27.2993 14.037 27.169 14.3516 26.9323 14.5882L26.0464 15.4741L25.1605 14.5882C24.6721 14.0998 24.6721 13.3049 25.1605 12.8163Z"
                        fill="#767676"
                      />
                      <path
                        d="M20.5 36.7969C20.2894 36.7969 20.0828 36.8826 19.9338 37.0315C19.7849 37.1804 19.6992 37.3871 19.6992 37.5977C19.6992 37.8083 19.7849 38.0149 19.9338 38.1638C20.0828 38.3128 20.2894 38.3984 20.5 38.3984C20.7106 38.3984 20.9172 38.3128 21.0661 38.1638C21.215 38.0149 21.3008 37.8083 21.3008 37.5977C21.3008 37.3871 21.2151 37.1804 21.0661 37.0315C20.9172 36.8826 20.7106 36.7969 20.5 36.7969Z"
                        fill="#767676"
                      />
                    </svg>
                  </div>
                  <h6 class="pt-1 mt-3 mt-xl-4 mb-0 text-center">Shirts</h6>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="mb-4 pb-lg-3"></div>

      <div class="container">
        <div class="breadcrumb mb-4 pb-md-2">
          <a href="#" class="menu-link menu-link_us-s text-uppercase fw-medium"
            >Home</a
          >
          <span class="breadcrumb-separator menu-link fw-medium ps-1 pe-1"
            >/</span
          >
          <a href="#" class="menu-link menu-link_us-s text-uppercase fw-medium"
            >The Shop</a
          >
        </div>
      </div>

      <section
        class="collections-grid collections-grid_masonry"
        id="section-collections-grid_masonry"
      >
        <div class="container h-md-100">
          <div class="row h-md-100">
            <div class="col-lg-6 h-md-100">
              <div class="collection-grid__item position-relative h-md-100">
                <div
                  class="background-img"
                  style="
                    background-image: url('../images/collection_grid_1.jpg');
                  "
                ></div>
                <div
                  class="content_abs content_bottom content_left content_bottom-md content_left-md"
                >
                  <p class="text-uppercase mb-1">Hot List</p>
                  <h3 class="text-uppercase">
                    <strong>Women</strong> Collection
                  </h3>
                  <a href="#" class="btn-link text-uppercase fw-medium"
                    >Shop Now</a
                  >
                </div>
              </div>
            </div>

            <div class="col-lg-6 d-flex flex-column">
              <div
                class="collection-grid__item position-relative flex-grow-1 mb-lg-4"
              >
                <div
                  class="background-img"
                  style="
                    background-image: url('../images/collection_grid_2.jpg');
                  "
                ></div>
                <div
                  class="content_abs content_bottom content_left content_bottom-md content_left-md"
                >
                  <p class="text-uppercase mb-1">Hot List</p>
                  <h3 class="text-uppercase">
                    <strong>Men</strong> Collection
                  </h3>
                  <a href="#" class="btn-link text-uppercase fw-medium"
                    >Shop Now</a
                  >
                </div>
              </div>
              <div class="position-relative flex-grow-1 mt-lg-1">
                <div class="row h-md-100">
                  <div class="col-md-6 h-md-100">
                    <div
                      class="collection-grid__item h-md-100 position-relative"
                    >
                      <div
                        class="background-img"
                        style="
                          background-image: url('../images/collection_grid_3.jpg');
                        "
                      ></div>
                      <div
                        class="content_abs content_bottom content_left content_bottom-md content_left-md"
                      >
                        <p class="text-uppercase mb-1">Hot List</p>
                        <h3 class="text-uppercase">
                          <strong>Kids</strong> Collection
                        </h3>
                        <a href="#" class="btn-link text-uppercase fw-medium"
                          >Shop Now</a
                        >
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 h-md-100">
                    <div
                      class="collection-grid__item h-md-100 position-relative"
                    >
                      <div
                        class="background-img"
                        style="background-color: #f5e6e0"
                      ></div>
                      <div
                        class="content_abs content_bottom content_left content_bottom-md content_left-md"
                      >
                        <h3 class="text-uppercase">
                          <strong>E-Gift</strong> Cards
                        </h3>
                        <p class="mb-1">
                          Surprise someone with the gift they<br />really want.
                        </p>
                        <a href="#" class="btn-link text-uppercase fw-medium"
                          >Shop Now</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <div class="mb-5 pb-xl-5"></div>

    <footer class="footer footer_type_1">
      <div class="footer-middle container">
        <div class="row row-cols-lg-5 row-cols-2">
          <div class="footer-column footer-store-info mb-4 mb-lg-0">
            <div class="logo">
              <a href="../index.html">
                <img
                  src="./images/logo.png"
                  alt="Uomo"
                  class="logo__image d-block"
                />
              </a>
            </div>
            <p class="footer-address">
              1418 River Drive, Suite 35 Cottonhall, CA 9622 United States
            </p>

            <p class="m-0">
              <strong class="fw-medium">sale@uomo.com</strong>
            </p>
            <p>
              <strong class="fw-medium">+1 246-345-0695</strong>
            </p>

            <ul class="social-links list-unstyled d-flex flex-wrap mb-0">
              <li>
                <a href="#" class="footer__social-link d-block">
                  <svg
                    class="svg-icon svg-icon_facebook"
                    width="9"
                    height="15"
                    viewBox="0 0 9 15"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <use href="#icon_facebook" />
                  </svg>
                </a>
              </li>
              <li>
                <a href="#" class="footer__social-link d-block">
                  <svg
                    class="svg-icon svg-icon_twitter"
                    width="14"
                    height="13"
                    viewBox="0 0 14 13"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <use href="#icon_twitter" />
                  </svg>
                </a>
              </li>
              <li>
                <a href="#" class="footer__social-link d-block">
                  <svg
                    class="svg-icon svg-icon_instagram"
                    width="14"
                    height="13"
                    viewBox="0 0 14 13"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <use href="#icon_instagram" />
                  </svg>
                </a>
              </li>
              <li>
                <a href="#" class="footer__social-link d-block">
                  <svg
                    class="svg-icon svg-icon_youtube"
                    width="16"
                    height="11"
                    viewBox="0 0 16 11"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M15.0117 1.8584C14.8477 1.20215 14.3281 0.682617 13.6992 0.518555C12.5234 0.19043 7.875 0.19043 7.875 0.19043C7.875 0.19043 3.19922 0.19043 2.02344 0.518555C1.39453 0.682617 0.875 1.20215 0.710938 1.8584C0.382812 3.00684 0.382812 5.46777 0.382812 5.46777C0.382812 5.46777 0.382812 7.90137 0.710938 9.07715C0.875 9.7334 1.39453 10.2256 2.02344 10.3896C3.19922 10.6904 7.875 10.6904 7.875 10.6904C7.875 10.6904 12.5234 10.6904 13.6992 10.3896C14.3281 10.2256 14.8477 9.7334 15.0117 9.07715C15.3398 7.90137 15.3398 5.46777 15.3398 5.46777C15.3398 5.46777 15.3398 3.00684 15.0117 1.8584ZM6.34375 7.68262V3.25293L10.2266 5.46777L6.34375 7.68262Z"
                    />
                  </svg>
                </a>
              </li>
              <li>
                <a href="#" class="footer__social-link d-block">
                  <svg
                    class="svg-icon svg-icon_pinterest"
                    width="14"
                    height="15"
                    viewBox="0 0 14 15"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <use href="#icon_pinterest" />
                  </svg>
                </a>
              </li>
            </ul>
          </div>

          <div class="footer-column footer-menu mb-4 mb-lg-0">
            <h5 class="sub-menu__title text-uppercase">Company</h5>
            <ul class="sub-menu__list list-unstyled">
              <li class="sub-menu__item">
                <a href="about.html" class="menu-link menu-link_us-s"
                  >About Us</a
                >
              </li>
              <li class="sub-menu__item">
                <a href="#" class="menu-link menu-link_us-s">Careers</a>
              </li>
              <li class="sub-menu__item">
                <a href="#" class="menu-link menu-link_us-s">Affiliates</a>
              </li>
              <li class="sub-menu__item">
                <a href="blog_list1.html" class="menu-link menu-link_us-s"
                  >Blog</a
                >
              </li>
              <li class="sub-menu__item">
                <a href="contact.html" class="menu-link menu-link_us-s"
                  >Contact Us</a
                >
              </li>
            </ul>
          </div>
          <div class="footer-column footer-menu mb-4 mb-lg-0">
            <h5 class="sub-menu__title text-uppercase">Shop</h5>
            <ul class="sub-menu__list list-unstyled">
              <li class="sub-menu__item">
                <a href="shop2.html" class="menu-link menu-link_us-s"
                  >New Arrivals</a
                >
              </li>
              <li class="sub-menu__item">
                <a href="shop3.html" class="menu-link menu-link_us-s"
                  >Accessories</a
                >
              </li>
              <li class="sub-menu__item">
                <a href="shop4.html" class="menu-link menu-link_us-s">Men</a>
              </li>
              <li class="sub-menu__item">
                <a href="shop5.html" class="menu-link menu-link_us-s">Women</a>
              </li>
              <li class="sub-menu__item">
                <a href="shop1.html" class="menu-link menu-link_us-s"
                  >Shop All</a
                >
              </li>
            </ul>
          </div>
          <div class="footer-column footer-menu mb-4 mb-lg-0">
            <h5 class="sub-menu__title text-uppercase">Help</h5>
            <ul class="sub-menu__list list-unstyled">
              <li class="sub-menu__item">
                <a href="#" class="menu-link menu-link_us-s"
                  >Customer Service</a
                >
              </li>
              <li class="sub-menu__item">
                <a
                  href="account_dashboard.html"
                  class="menu-link menu-link_us-s"
                  >My Account</a
                >
              </li>
              <li class="sub-menu__item">
                <a href="store_location.html" class="menu-link menu-link_us-s"
                  >Find a Store</a
                >
              </li>
              <li class="sub-menu__item">
                <a href="#" class="menu-link menu-link_us-s">Legal & Privacy</a>
              </li>
              <li class="sub-menu__item">
                <a href="contact.html" class="menu-link menu-link_us-s"
                  >Contact</a
                >
              </li>
              <li class="sub-menu__item">
                <a href="#" class="menu-link menu-link_us-s">Gift Card</a>
              </li>
            </ul>
          </div>
          <div class="footer-column footer-newsletter mb-4 mb-lg-0">
            <h5 class="sub-menu__title text-uppercase">Subscribe</h5>
            <p>
              Be the first to get the latest news about trends, promotions, and
              much more!
            </p>
            <form
              action="https://uomo-html.flexkitux.com/Demo2/"
              class="footer-newsletter__form position-relative bg-body"
            >
              <input
                class="form-control border-white"
                type="email"
                name="email"
                placeholder="Your email address"
              />
              <input
                class="btn-link fw-medium bg-white position-absolute top-0 end-0 h-100"
                type="submit"
                value="JOIN"
              />
            </form>

            <div class="mt-4 pt-3">
              <strong class="fw-medium">Secure payments</strong>
              <p class="mt-2">
                <img
                  loading="lazy"
                  src="./images/payment-options.png"
                  alt="Acceptable payment gateways"
                  class="mw-100"
                />
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="footer-bottom container">
        <div class="d-block d-md-flex align-items-center">
          <span class="footer-copyright me-auto">©2023 Uomo</span>
          <div class="footer-settings d-block d-md-flex align-items-center">
            <div class="d-flex align-items-center">
              <label for="footerSettingsLanguage" class="me-2 text-secondary"
                >Language</label
              >
              <select
                id="footerSettingsLanguage"
                class="form-select form-select-sm bg-transparent"
                aria-label="Default select example"
                name="store-language"
              >
                <option class="footer-select__option" selected>
                  United Kingdom | English
                </option>
                <option class="footer-select__option" value="1">
                  United States | English
                </option>
                <option class="footer-select__option" value="2">German</option>
                <option class="footer-select__option" value="3">French</option>
                <option class="footer-select__option" value="4">Swedish</option>
              </select>
            </div>

            <div class="d-flex align-items-center">
              <label
                for="footerSettingsCurrency"
                class="ms-md-3 me-2 text-secondary"
                >Currency</label
              >
              <select
                id="footerSettingsCurrency"
                class="form-select form-select-sm bg-transparent"
                aria-label="Default select example"
                name="store-language"
              >
                <option selected>$ USD</option>
                <option value="1">£ GBP</option>
                <option value="2">€ EURO</option>
              </select>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <footer class="footer-mobile container w-100 px-5 d-md-none bg-body">
      <div class="row text-center">
        <div class="col-4">
          <a
            href="../index.html"
            class="footer-mobile__link d-flex flex-column align-items-center"
          >
            <svg
              class="d-block"
              width="18"
              height="18"
              viewBox="0 0 18 18"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <use href="#icon_home" />
            </svg>
            <span>Home</span>
          </a>
        </div>

        <div class="col-4">
          <a
            href="../index.html"
            class="footer-mobile__link d-flex flex-column align-items-center"
          >
            <svg
              class="d-block"
              width="18"
              height="18"
              viewBox="0 0 18 18"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <use href="#icon_hanger" />
            </svg>
            <span>Shop</span>
          </a>
        </div>

        <div class="col-4">
          <a
            href="../index.html"
            class="footer-mobile__link d-flex flex-column align-items-center"
          >
            <div class="position-relative">
              <svg
                class="d-block"
                width="18"
                height="18"
                viewBox="0 0 20 20"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <use href="#icon_heart" />
              </svg>
              <span
                class="wishlist-amount d-block position-absolute js-wishlist-count"
                >3</span
              >
            </div>
            <span>Wishlist</span>
          </a>
        </div>
      </div>
    </footer>

    <div class="aside-filters aside aside_right" id="shopFilter">
      <div class="aside-header d-flex align-items-center">
        <h3 class="text-uppercase fs-6 mb-0">Filter By</h3>
        <button
          class="btn-close-lg js-close-aside btn-close-aside ms-auto"
        ></button>
      </div>

      <div class="aside-content">
        <div class="accordion" id="categories-list">
          <div class="accordion-item mb-4">
            <h5 class="accordion-header" id="accordion-heading-11">
              <button
                class="accordion-button p-0 border-0 fs-5 text-uppercase"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#accordion-filter-1"
                aria-expanded="true"
                aria-controls="accordion-filter-1"
              >
                Product Categories
                <svg
                  class="accordion-button__icon type2"
                  viewBox="0 0 10 6"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <g aria-hidden="true" stroke="none" fill-rule="evenodd">
                    <path
                      d="M5.35668 0.159286C5.16235 -0.053094 4.83769 -0.0530941 4.64287 0.159286L0.147611 5.05963C-0.0492049 5.27473 -0.049205 5.62357 0.147611 5.83813C0.344427 6.05323 0.664108 6.05323 0.860924 5.83813L5 1.32706L9.13858 5.83867C9.33589 6.05378 9.65507 6.05378 9.85239 5.83867C10.0492 5.62357 10.0492 5.27473 9.85239 5.06018L5.35668 0.159286Z"
                    />
                  </g>
                </svg>
              </button>
            </h5>
            <div
              id="accordion-filter-1"
              class="accordion-collapse collapse show border-0"
              aria-labelledby="accordion-heading-11"
              data-bs-parent="#categories-list"
            >
              <div class="accordion-body px-0 pb-0">
                <ul class="list list-inline row row-cols-2 mb-0">
                  <li class="list-item">
                    <a href="#" class="menu-link py-1">Dresses</a>
                  </li>
                  <li class="list-item">
                    <a href="#" class="menu-link py-1">Shorts</a>
                  </li>
                  <li class="list-item">
                    <a href="#" class="menu-link py-1">Sweatshirts</a>
                  </li>
                  <li class="list-item">
                    <a href="#" class="menu-link py-1">Swimwear</a>
                  </li>
                  <li class="list-item">
                    <a href="#" class="menu-link py-1">Jackets</a>
                  </li>
                  <li class="list-item">
                    <a href="#" class="menu-link py-1">T-Shirts & Tops</a>
                  </li>
                  <li class="list-item">
                    <a href="#" class="menu-link py-1">Jeans</a>
                  </li>
                  <li class="list-item">
                    <a href="#" class="menu-link py-1">Trousers</a>
                  </li>
                  <li class="list-item">
                    <a href="#" class="menu-link py-1">Men</a>
                  </li>
                  <li class="list-item">
                    <a href="#" class="menu-link py-1">Jumpers & Cardigans</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="accordion" id="color-filters">
          <div class="accordion-item mb-4">
            <h5 class="accordion-header" id="accordion-heading-1">
              <button
                class="accordion-button p-0 border-0 fs-5 text-uppercase"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#accordion-filter-2"
                aria-expanded="true"
                aria-controls="accordion-filter-2"
              >
                Color
                <svg
                  class="accordion-button__icon type2"
                  viewBox="0 0 10 6"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <g aria-hidden="true" stroke="none" fill-rule="evenodd">
                    <path
                      d="M5.35668 0.159286C5.16235 -0.053094 4.83769 -0.0530941 4.64287 0.159286L0.147611 5.05963C-0.0492049 5.27473 -0.049205 5.62357 0.147611 5.83813C0.344427 6.05323 0.664108 6.05323 0.860924 5.83813L5 1.32706L9.13858 5.83867C9.33589 6.05378 9.65507 6.05378 9.85239 5.83867C10.0492 5.62357 10.0492 5.27473 9.85239 5.06018L5.35668 0.159286Z"
                    />
                  </g>
                </svg>
              </button>
            </h5>
            <div
              id="accordion-filter-2"
              class="accordion-collapse collapse show border-0"
              aria-labelledby="accordion-heading-1"
              data-bs-parent="#color-filters"
            >
              <div class="accordion-body px-0 pb-0">
                <div class="d-flex flex-wrap">
                  <a
                    href="#"
                    class="swatch-color js-filter"
                    style="color: #0a2472"
                  ></a>
                  <a
                    href="#"
                    class="swatch-color js-filter"
                    style="color: #d7bb4f"
                  ></a>
                  <a
                    href="#"
                    class="swatch-color js-filter"
                    style="color: #282828"
                  ></a>
                  <a
                    href="#"
                    class="swatch-color js-filter"
                    style="color: #b1d6e8"
                  ></a>
                  <a
                    href="#"
                    class="swatch-color js-filter"
                    style="color: #9c7539"
                  ></a>
                  <a
                    href="#"
                    class="swatch-color js-filter"
                    style="color: #d29b48"
                  ></a>
                  <a
                    href="#"
                    class="swatch-color js-filter"
                    style="color: #e6ae95"
                  ></a>
                  <a
                    href="#"
                    class="swatch-color js-filter"
                    style="color: #d76b67"
                  ></a>
                  <a
                    href="#"
                    class="swatch-color swatch_active js-filter"
                    style="color: #bababa"
                  ></a>
                  <a
                    href="#"
                    class="swatch-color js-filter"
                    style="color: #bfdcc4"
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="accordion" id="size-filters">
          <div class="accordion-item mb-4">
            <h5 class="accordion-header" id="accordion-heading-size">
              <button
                class="accordion-button p-0 border-0 fs-5 text-uppercase"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#accordion-filter-size"
                aria-expanded="true"
                aria-controls="accordion-filter-size"
              >
                Sizes
                <svg
                  class="accordion-button__icon type2"
                  viewBox="0 0 10 6"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <g aria-hidden="true" stroke="none" fill-rule="evenodd">
                    <path
                      d="M5.35668 0.159286C5.16235 -0.053094 4.83769 -0.0530941 4.64287 0.159286L0.147611 5.05963C-0.0492049 5.27473 -0.049205 5.62357 0.147611 5.83813C0.344427 6.05323 0.664108 6.05323 0.860924 5.83813L5 1.32706L9.13858 5.83867C9.33589 6.05378 9.65507 6.05378 9.85239 5.83867C10.0492 5.62357 10.0492 5.27473 9.85239 5.06018L5.35668 0.159286Z"
                    />
                  </g>
                </svg>
              </button>
            </h5>
            <div
              id="accordion-filter-size"
              class="accordion-collapse collapse show border-0"
              aria-labelledby="accordion-heading-size"
              data-bs-parent="#size-filters"
            >
              <div class="accordion-body px-0 pb-0">
                <div class="d-flex flex-wrap">
                  <a
                    href="#"
                    class="swatch-size btn btn-sm btn-outline-light mb-3 me-3 js-filter"
                    >XS</a
                  >
                  <a
                    href="#"
                    class="swatch-size btn btn-sm btn-outline-light mb-3 me-3 js-filter"
                    >S</a
                  >
                  <a
                    href="#"
                    class="swatch-size btn btn-sm btn-outline-light mb-3 me-3 js-filter"
                    >M</a
                  >
                  <a
                    href="#"
                    class="swatch-size btn btn-sm btn-outline-light mb-3 me-3 js-filter"
                    >L</a
                  >
                  <a
                    href="#"
                    class="swatch-size btn btn-sm btn-outline-light mb-3 me-3 js-filter"
                    >XL</a
                  >
                  <a
                    href="#"
                    class="swatch-size btn btn-sm btn-outline-light mb-3 me-3 js-filter"
                    >XXL</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="accordion" id="brand-filters">
          <div class="accordion-item mb-4">
            <h5 class="accordion-header" id="accordion-heading-brand">
              <button
                class="accordion-button p-0 border-0 fs-5 text-uppercase"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#accordion-filter-brand"
                aria-expanded="true"
                aria-controls="accordion-filter-brand"
              >
                Brands
                <svg
                  class="accordion-button__icon type2"
                  viewBox="0 0 10 6"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <g aria-hidden="true" stroke="none" fill-rule="evenodd">
                    <path
                      d="M5.35668 0.159286C5.16235 -0.053094 4.83769 -0.0530941 4.64287 0.159286L0.147611 5.05963C-0.0492049 5.27473 -0.049205 5.62357 0.147611 5.83813C0.344427 6.05323 0.664108 6.05323 0.860924 5.83813L5 1.32706L9.13858 5.83867C9.33589 6.05378 9.65507 6.05378 9.85239 5.83867C10.0492 5.62357 10.0492 5.27473 9.85239 5.06018L5.35668 0.159286Z"
                    />
                  </g>
                </svg>
              </button>
            </h5>
            <div
              id="accordion-filter-brand"
              class="accordion-collapse collapse show border-0"
              aria-labelledby="accordion-heading-brand"
              data-bs-parent="#brand-filters"
            >
              <div class="search-field multi-select accordion-body px-0 pb-0">
                <select class="d-none" multiple name="total-numbers-list">
                  <option value="1">Adidas</option>
                  <option value="2">Balmain</option>
                  <option value="3">Balenciaga</option>
                  <option value="4">Burberry</option>
                  <option value="5">Kenzo</option>
                  <option value="5">Givenchy</option>
                  <option value="5">Zara</option>
                </select>
                <div class="search-field__input-wrapper mb-3">
                  <input
                    type="text"
                    name="search_text"
                    class="search-field__input form-control form-control-sm border-light border-2"
                    placeholder="SEARCH"
                  />
                </div>
                <ul class="multi-select__list list-unstyled">
                  <li
                    class="search-suggestion__item multi-select__item text-primary js-search-select js-multi-select"
                  >
                    <span class="me-auto">Adidas</span>
                    <span class="text-secondary">2</span>
                  </li>
                  <li
                    class="search-suggestion__item multi-select__item text-primary js-search-select js-multi-select"
                  >
                    <span class="me-auto">Balmain</span>
                    <span class="text-secondary">7</span>
                  </li>
                  <li
                    class="search-suggestion__item multi-select__item text-primary js-search-select js-multi-select"
                  >
                    <span class="me-auto">Balenciaga</span>
                    <span class="text-secondary">10</span>
                  </li>
                  <li
                    class="search-suggestion__item multi-select__item text-primary js-search-select js-multi-select"
                  >
                    <span class="me-auto">Burberry</span>
                    <span class="text-secondary">39</span>
                  </li>
                  <li
                    class="search-suggestion__item multi-select__item text-primary js-search-select js-multi-select"
                  >
                    <span class="me-auto">Kenzo</span>
                    <span class="text-secondary">95</span>
                  </li>
                  <li
                    class="search-suggestion__item multi-select__item text-primary js-search-select js-multi-select"
                  >
                    <span class="me-auto">Givenchy</span>
                    <span class="text-secondary">1092</span>
                  </li>
                  <li
                    class="search-suggestion__item multi-select__item text-primary js-search-select js-multi-select"
                  >
                    <span class="me-auto">Zara</span>
                    <span class="text-secondary">48</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="accordion" id="price-filters">
          <div class="accordion-item mb-4">
            <h5 class="accordion-header mb-2" id="accordion-heading-price">
              <button
                class="accordion-button p-0 border-0 fs-5 text-uppercase"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#accordion-filter-price"
                aria-expanded="true"
                aria-controls="accordion-filter-price"
              >
                Price
                <svg
                  class="accordion-button__icon type2"
                  viewBox="0 0 10 6"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <g aria-hidden="true" stroke="none" fill-rule="evenodd">
                    <path
                      d="M5.35668 0.159286C5.16235 -0.053094 4.83769 -0.0530941 4.64287 0.159286L0.147611 5.05963C-0.0492049 5.27473 -0.049205 5.62357 0.147611 5.83813C0.344427 6.05323 0.664108 6.05323 0.860924 5.83813L5 1.32706L9.13858 5.83867C9.33589 6.05378 9.65507 6.05378 9.85239 5.83867C10.0492 5.62357 10.0492 5.27473 9.85239 5.06018L5.35668 0.159286Z"
                    />
                  </g>
                </svg>
              </button>
            </h5>
            <div
              id="accordion-filter-price"
              class="accordion-collapse collapse show border-0"
              aria-labelledby="accordion-heading-price"
              data-bs-parent="#price-filters"
            >
              <input
                class="price-range-slider"
                type="text"
                name="price_range"
                value=""
                data-slider-min="10"
                data-slider-max="1000"
                data-slider-step="5"
                data-slider-value="[250,450]"
                data-currency="$"
              />
              <div class="price-range__info d-flex align-items-center mt-2">
                <div class="me-auto">
                  <span class="text-secondary">Min Price: </span>
                  <span class="price-range__min">$250</span>
                </div>
                <div>
                  <span class="text-secondary">Max Price: </span>
                  <span class="price-range__max">$450</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="filter-active-tags pt-2">
          <button
            class="filter-tag d-inline-flex align-items-center mb-3 me-3 text-uppercase js-filter"
          >
            <i class="btn-close-xs d-inline-block"></i>
            <span class="ms-2">Blues</span>
          </button>
          <button
            class="filter-tag d-inline-flex align-items-center mb-3 me-3 text-uppercase js-filter"
          >
            <i class="btn-close-xs d-inline-block"></i>
            <span class="ms-2">Max Price: $493</span>
          </button>
          <button
            class="filter-tag d-inline-flex align-items-center mb-3 text-uppercase js-filter"
          >
            <i class="btn-close-xs d-inline-block"></i>
            <span class="ms-2">Zara</span>
          </button>

          <div>
            <button
              class="filter-tag d-flex align-items-center text-uppercase js-filter"
            >
              <i class="btn-close-xs d-inline-block"></i>
              <span class="ms-2">RESET FILTER</span>
            </button>
          </div>
        </div>
      </div>
    </div>

    <div
      class="aside aside_right overflow-hidden customer-forms"
      id="customerForms"
    >
      <div class="customer-forms__wrapper d-flex position-relative">
        <div class="customer__login">
          <div class="aside-header d-flex align-items-center">
            <h3 class="text-uppercase fs-6 mb-0">Login</h3>
            <button class="btn-close-lg js-close-aside ms-auto"></button>
          </div>

          <form
            action="https://uomo-html.flexkitux.com/Demo2/"
            method="POST"
            class="aside-content"
          >
            <div class="form-floating mb-3">
              <input
                name="email"
                type="email"
                class="form-control form-control_gray"
                id="customerNameEmailInput"
                placeholder="name@example.com"
              />
              <label for="customerNameEmailInput"
                >Username or email address *</label
              >
            </div>

            <div class="pb-3"></div>

            <div class="form-label-fixed mb-3">
              <label for="customerPasswordInput" class="form-label"
                >Password *</label
              >
              <input
                name="password"
                id="customerPasswordInput"
                class="form-control form-control_gray"
                type="password"
                placeholder="********"
              />
            </div>

            <div class="d-flex align-items-center mb-3 pb-2">
              <div class="form-check mb-0">
                <input
                  name="remember"
                  class="form-check-input form-check-input_fill"
                  type="checkbox"
                  value=""
                  id="flexCheckDefault"
                />
                <label
                  class="form-check-label text-secondary"
                  for="flexCheckDefault"
                  >Remember me</label
                >
              </div>
              <a href="reset_password.html" class="btn-text ms-auto"
                >Lost password?</a
              >
            </div>

            <button class="btn btn-primary w-100 text-uppercase" type="submit">
              Log In
            </button>

            <div class="customer-option mt-4 text-center">
              <span class="text-secondary">No account yet?</span>
              <a
                href="login_register.html#register-tab"
                class="btn-text js-show-register"
                >Create Account</a
              >
            </div>
          </form>
        </div>

        <div class="customer__register">
          <div class="aside-header d-flex align-items-center">
            <h3 class="text-uppercase fs-6 mb-0">Create an account</h3>
            <button
              class="btn-close-lg js-close-aside btn-close-aside ms-auto"
            ></button>
          </div>

          <form
            action="https://uomo-html.flexkitux.com/Demo2/"
            method="POST"
            class="aside-content"
          >
            <div class="form-floating mb-4">
              <input
                name="username"
                type="text"
                class="form-control form-control_gray"
                id="registerUserNameInput"
                placeholder="Username"
              />
              <label for="registerUserNameInput">Username</label>
            </div>

            <div class="pb-1"></div>

            <div class="form-floating mb-4">
              <input
                name="email"
                type="email"
                class="form-control form-control_gray"
                id="registerUserEmailInput"
                placeholder="user@company.com"
              />
              <label for="registerUserEmailInput">Email address *</label>
            </div>

            <div class="pb-1"></div>

            <div class="form-label-fixed mb-4">
              <label for="registerPasswordInput" class="form-label"
                >Password *</label
              >
              <input
                name="password"
                id="registerPasswordInput"
                class="form-control form-control_gray"
                type="password"
                placeholder="*******"
              />
            </div>

            <p class="text-secondary mb-4">
              Your personal data will be used to support your experience
              throughout this website, to manage access to your account, and for
              other purposes described in our privacy policy.
            </p>

            <button class="btn btn-primary w-100 text-uppercase" type="submit">
              Register
            </button>

            <div class="customer-option mt-4 text-center">
              <span class="text-secondary">Already have account?</span>
              <a href="#" class="btn-text js-show-login">Login</a>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="aside aside_right overflow-hidden cart-drawer" id="cartDrawer">
      <div class="aside-header d-flex align-items-center">
        <h3 class="text-uppercase fs-6 mb-0">
          SHOPPING BAG (
          <span class="cart-amount js-cart-items-count">1</span> )
        </h3>
        <button
          class="btn-close-lg js-close-aside btn-close-aside ms-auto"
        ></button>
      </div>

      <div class="aside-content cart-drawer-items-list">
        <div class="cart-drawer-item d-flex position-relative">
          <div class="position-relative">
            <img
              loading="lazy"
              class="cart-drawer-item__img"
              src="./images/cart-item-1.jpg"
              alt=""
            />
          </div>
          <div class="cart-drawer-item__info flex-grow-1">
            <h6 class="cart-drawer-item__title fw-normal">Zessi Dresses</h6>
            <p class="cart-drawer-item__option text-secondary">Color: Yellow</p>
            <p class="cart-drawer-item__option text-secondary">Size: L</p>
            <div class="d-flex align-items-center justify-content-between mt-1">
              <div class="qty-control position-relative">
                <input
                  type="number"
                  name="quantity"
                  value="1"
                  min="1"
                  class="qty-control__number border-0 text-center"
                />
                <div class="qty-control__reduce text-start">-</div>
                <div class="qty-control__increase text-end">+</div>
              </div>
              <span class="cart-drawer-item__price money price">$99</span>
            </div>
          </div>

          <button
            class="btn-close-xs position-absolute top-0 end-0 js-cart-item-remove"
          ></button>
        </div>

        <hr class="cart-drawer-divider" />

        <div class="cart-drawer-item d-flex position-relative">
          <div class="position-relative">
            <img
              loading="lazy"
              class="cart-drawer-item__img"
              src="./images/cart-item-2.jpg"
              alt=""
            />
          </div>
          <div class="cart-drawer-item__info flex-grow-1">
            <h6 class="cart-drawer-item__title fw-normal">Kirby T-Shirt</h6>
            <p class="cart-drawer-item__option text-secondary">Color: Black</p>
            <p class="cart-drawer-item__option text-secondary">Size: XS</p>
            <div class="d-flex align-items-center justify-content-between mt-1">
              <div class="qty-control position-relative">
                <input
                  type="number"
                  name="quantity"
                  value="4"
                  min="1"
                  class="qty-control__number border-0 text-center"
                />
                <div class="qty-control__reduce text-start">-</div>
                <div class="qty-control__increase text-end">+</div>
              </div>
              <span class="cart-drawer-item__price money price">$89</span>
            </div>
          </div>

          <button
            class="btn-close-xs position-absolute top-0 end-0 js-cart-item-remove"
          ></button>
        </div>

        <hr class="cart-drawer-divider" />

        <div class="cart-drawer-item d-flex position-relative">
          <div class="position-relative">
            <img
              loading="lazy"
              class="cart-drawer-item__img"
              src="./images/cart-item-3.jpg"
              alt=""
            />
          </div>
          <div class="cart-drawer-item__info flex-grow-1">
            <h6 class="cart-drawer-item__title fw-normal">Cableknit Shawl</h6>
            <p class="cart-drawer-item__option text-secondary">Color: Green</p>
            <p class="cart-drawer-item__option text-secondary">Size: L</p>
            <div class="d-flex align-items-center justify-content-between mt-1">
              <div class="qty-control position-relative">
                <input
                  type="number"
                  name="quantity"
                  value="3"
                  min="1"
                  class="qty-control__number border-0 text-center"
                />
                <div class="qty-control__reduce text-start">-</div>
                <div class="qty-control__increase text-end">+</div>
              </div>
              <span class="cart-drawer-item__price money price">$129</span>
            </div>
          </div>

          <button
            class="btn-close-xs position-absolute top-0 end-0 js-cart-item-remove"
          ></button>
        </div>
      </div>

      <div class="cart-drawer-actions position-absolute start-0 bottom-0 w-100">
        <hr class="cart-drawer-divider" />
        <div class="d-flex justify-content-between">
          <h6 class="fs-base fw-medium">SUBTOTAL:</h6>
          <span class="cart-subtotal fw-medium">$176.00</span>
        </div>
        <a href="shop_cart.html" class="btn btn-light mt-3 d-block"
          >View Cart</a
        >
        <a href="shop_checkout.html" class="btn btn-primary mt-3 d-block"
          >Checkout</a
        >
      </div>
    </div>

    <div class="modal fade" id="siteMap" tabindex="-1">
      <div class="modal-dialog modal-fullscreen">
        <div class="sitemap d-flex">
          <div class="w-50 d-none d-lg-block">
            <img
              loading="lazy"
              src="./images/nav-bg.jpg"
              alt="Site map"
              class="sitemap__bg"
            />
          </div>
          <div class="sitemap__links w-50 flex-grow-1">
            <div class="modal-content">
              <div class="modal-header">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <a
                      class="nav-link active rounded-1 text-uppercase"
                      id="pills-item-1-tab"
                      data-bs-toggle="pill"
                      href="#pills-item-1"
                      role="tab"
                      aria-controls="pills-item-1"
                      aria-selected="true"
                      >WOMEN</a
                    >
                  </li>
                  <li class="nav-item" role="presentation">
                    <a
                      class="nav-link rounded-1 text-uppercase"
                      id="pills-item-2-tab"
                      data-bs-toggle="pill"
                      href="#pills-item-2"
                      role="tab"
                      aria-controls="pills-item-2"
                      aria-selected="false"
                      >MEN</a
                    >
                  </li>
                  <li class="nav-item" role="presentation">
                    <a
                      class="nav-link rounded-1 text-uppercase"
                      id="pills-item-3-tab"
                      data-bs-toggle="pill"
                      href="#pills-item-3"
                      role="tab"
                      aria-controls="pills-item-3"
                      aria-selected="false"
                      >KIDS</a
                    >
                  </li>
                </ul>
                <button
                  type="button"
                  class="btn-close-lg"
                  data-bs-dismiss="modal"
                  aria-label="Close"
                ></button>
              </div>

              <div class="modal-body">
                <div class="tab-content col-12" id="pills-tabContent">
                  <div
                    class="tab-pane fade show active"
                    id="pills-item-1"
                    role="tabpanel"
                    aria-labelledby="pills-item-1-tab"
                  >
                    <div class="row">
                      <ul
                        class="nav nav-tabs list-unstyled col-5 d-block"
                        id="myTab"
                        role="tablist"
                      >
                        <li
                          class="nav-item position-relative"
                          role="presentation"
                        >
                          <a
                            class="nav-link nav-link_rline active"
                            id="tab-item-1-tab"
                            data-bs-toggle="tab"
                            href="#tab-item-1"
                            role="tab"
                            aria-controls="tab-item-1"
                            aria-selected="true"
                            ><span class="rline-content">WOMEN</span></a
                          >
                        </li>
                        <li
                          class="nav-item position-relative"
                          role="presentation"
                        >
                          <a
                            class="nav-link nav-link_rline"
                            id="tab-item-2-tab"
                            data-bs-toggle="tab"
                            href="#tab-item-2"
                            role="tab"
                            aria-controls="tab-item-2"
                            aria-selected="false"
                            ><span class="rline-content">MAN</span></a
                          >
                        </li>
                        <li
                          class="nav-item position-relative"
                          role="presentation"
                        >
                          <a
                            class="nav-link nav-link_rline"
                            id="tab-item-3-tab"
                            data-bs-toggle="tab"
                            href="#tab-item-3"
                            role="tab"
                            aria-controls="tab-item-3"
                            aria-selected="false"
                            ><span class="rline-content">KIDS</span></a
                          >
                        </li>
                        <li
                          class="nav-item position-relative"
                          role="presentation"
                        >
                          <a class="nav-link nav-link_rline" href="#"
                            ><span class="rline-content">HOME</span></a
                          >
                        </li>
                        <li
                          class="nav-item position-relative"
                          role="presentation"
                        >
                          <a class="nav-link nav-link_rline" href="#"
                            ><span class="rline-content">COLLECTION</span></a
                          >
                        </li>
                        <li
                          class="nav-item position-relative"
                          role="presentation"
                        >
                          <a class="nav-link nav-link_rline text-red" href="#"
                            >SALE UP TO 50% OFF</a
                          >
                        </li>
                        <li
                          class="nav-item position-relative"
                          role="presentation"
                        >
                          <a class="nav-link nav-link_rline" href="#"
                            ><span class="rline-content">NEW</span></a
                          >
                        </li>
                        <li
                          class="nav-item position-relative"
                          role="presentation"
                        >
                          <a class="nav-link nav-link_rline" href="#"
                            ><span class="rline-content">SHOES</span></a
                          >
                        </li>
                        <li
                          class="nav-item position-relative"
                          role="presentation"
                        >
                          <a class="nav-link nav-link_rline" href="#"
                            ><span class="rline-content">ACCESSORIES</span></a
                          >
                        </li>
                        <li
                          class="nav-item position-relative"
                          role="presentation"
                        >
                          <a class="nav-link nav-link_rline" href="#"
                            ><span class="rline-content">JOIN LIFE</span></a
                          >
                        </li>
                        <li
                          class="nav-item position-relative"
                          role="presentation"
                        >
                          <a class="nav-link nav-link_rline" href="#"
                            ><span class="rline-content">#UOMOSTYLE</span></a
                          >
                        </li>
                      </ul>

                      <div class="tab-content col-7" id="myTabContent">
                        <div
                          class="tab-pane fade show active"
                          id="tab-item-1"
                          role="tabpanel"
                          aria-labelledby="tab-item-1-tab"
                        >
                          <ul class="sub-menu list-unstyled">
                            <li class="sub-menu__item">
                              <a href="#" class="menu-link menu-link_us-s"
                                >New</a
                              >
                            </li>
                            <li class="sub-menu__item">
                              <a href="#" class="menu-link menu-link_us-s"
                                >Best Sellers</a
                              >
                            </li>
                            <li class="sub-menu__item">
                              <a href="#" class="menu-link menu-link_us-s"
                                >Collaborations®</a
                              >
                            </li>
                            <li class="sub-menu__item">
                              <a href="#" class="menu-link menu-link_us-s"
                                >Sets</a
                              >
                            </li>
                            <li class="sub-menu__item">
                              <a href="#" class="menu-link menu-link_us-s"
                                >Denim</a
                              >
                            </li>
                            <li class="sub-menu__item">
                              <a href="#" class="menu-link menu-link_us-s"
                                >Jackets & Coats</a
                              >
                            </li>
                            <li class="sub-menu__item">
                              <a href="#" class="menu-link menu-link_us-s"
                                >Overshirts</a
                              >
                            </li>
                            <li class="sub-menu__item">
                              <a href="#" class="menu-link menu-link_us-s"
                                >Trousers</a
                              >
                            </li>
                            <li class="sub-menu__item">
                              <a href="#" class="menu-link menu-link_us-s"
                                >Jeans</a
                              >
                            </li>
                            <li class="sub-menu__item">
                              <a href="#" class="menu-link menu-link_us-s"
                                >Dresses</a
                              >
                            </li>
                            <li class="sub-menu__item">
                              <a href="#" class="menu-link menu-link_us-s"
                                >Sweatshirts and Hoodies</a
                              >
                            </li>
                            <li class="sub-menu__item">
                              <a href="#" class="menu-link menu-link_us-s"
                                >T-shirts & Tops</a
                              >
                            </li>
                            <li class="sub-menu__item">
                              <a href="#" class="menu-link menu-link_us-s"
                                >Shirts & Blouses</a
                              >
                            </li>
                            <li class="sub-menu__item">
                              <a href="#" class="menu-link menu-link_us-s"
                                >Shorts and Bermudas</a
                              >
                            </li>
                            <li class="sub-menu__item">
                              <a href="#" class="menu-link menu-link_us-s"
                                >Shoes</a
                              >
                            </li>
                            <li class="sub-menu__item">
                              <a
                                href="shop3.html"
                                class="menu-link menu-link_us-s"
                                >Accessories</a
                              >
                            </li>
                            <li class="sub-menu__item">
                              <a href="#" class="menu-link menu-link_us-s"
                                >Bags</a
                              >
                            </li>
                            <li class="sub-menu__item">
                              <a href="#" class="menu-link menu-link_us-s"
                                >Gift Card</a
                              >
                            </li>
                          </ul>
                        </div>
                        <div
                          class="tab-pane fade"
                          id="tab-item-2"
                          role="tabpanel"
                          aria-labelledby="tab-item-2-tab"
                        >
                          <ul class="sub-menu list-unstyled">
                            <li class="sub-menu__item">
                              <a href="#" class="menu-link menu-link_us-s"
                                >Best Sellers</a
                              >
                            </li>
                            <li class="sub-menu__item">
                              <a href="#" class="menu-link menu-link_us-s"
                                >New</a
                              >
                            </li>
                            <li class="sub-menu__item">
                              <a href="#" class="menu-link menu-link_us-s"
                                >Sets</a
                              >
                            </li>
                            <li class="sub-menu__item">
                              <a href="#" class="menu-link menu-link_us-s"
                                >Denim</a
                              >
                            </li>
                            <li class="sub-menu__item">
                              <a href="#" class="menu-link menu-link_us-s"
                                >Collaborations®</a
                              >
                            </li>
                            <li class="sub-menu__item">
                              <a href="#" class="menu-link menu-link_us-s"
                                >Trousers</a
                              >
                            </li>
                            <li class="sub-menu__item">
                              <a href="#" class="menu-link menu-link_us-s"
                                >Jackets & Coats</a
                              >
                            </li>
                            <li class="sub-menu__item">
                              <a href="#" class="menu-link menu-link_us-s"
                                >Overshirts</a
                              >
                            </li>
                            <li class="sub-menu__item">
                              <a href="#" class="menu-link menu-link_us-s"
                                >Dresses</a
                              >
                            </li>
                            <li class="sub-menu__item">
                              <a href="#" class="menu-link menu-link_us-s"
                                >Jeans</a
                              >
                            </li>
                            <li class="sub-menu__item">
                              <a href="#" class="menu-link menu-link_us-s"
                                >Sweatshirts and Hoodies</a
                              >
                            </li>
                            <li class="sub-menu__item">
                              <a href="#" class="menu-link menu-link_us-s"
                                >Gift Card</a
                              >
                            </li>
                            <li class="sub-menu__item">
                              <a href="#" class="menu-link menu-link_us-s"
                                >Shirts & Blouses</a
                              >
                            </li>
                            <li class="sub-menu__item">
                              <a href="#" class="menu-link menu-link_us-s"
                                >T-shirts & Tops</a
                              >
                            </li>
                            <li class="sub-menu__item">
                              <a href="#" class="menu-link menu-link_us-s"
                                >Shorts and Bermudas</a
                              >
                            </li>
                            <li class="sub-menu__item">
                              <a
                                href="shop3.html"
                                class="menu-link menu-link_us-s"
                                >Accessories</a
                              >
                            </li>
                            <li class="sub-menu__item">
                              <a href="#" class="menu-link menu-link_us-s"
                                >Shoes</a
                              >
                            </li>
                            <li class="sub-menu__item">
                              <a href="#" class="menu-link menu-link_us-s"
                                >Bags</a
                              >
                            </li>
                          </ul>
                        </div>
                        <div
                          class="tab-pane fade"
                          id="tab-item-3"
                          role="tabpanel"
                          aria-labelledby="tab-item-3-tab"
                        >
                          <ul class="sub-menu list-unstyled">
                            <li class="sub-menu__item">
                              <a href="#" class="menu-link menu-link_us-s"
                                >Gift Card</a
                              >
                            </li>
                            <li class="sub-menu__item">
                              <a href="#" class="menu-link menu-link_us-s"
                                >Collaborations®</a
                              >
                            </li>
                            <li class="sub-menu__item">
                              <a href="#" class="menu-link menu-link_us-s"
                                >Sets</a
                              >
                            </li>
                            <li class="sub-menu__item">
                              <a href="#" class="menu-link menu-link_us-s"
                                >Denim</a
                              >
                            </li>
                            <li class="sub-menu__item">
                              <a href="#" class="menu-link menu-link_us-s"
                                >New</a
                              >
                            </li>
                            <li class="sub-menu__item">
                              <a href="#" class="menu-link menu-link_us-s"
                                >Best Sellers</a
                              >
                            </li>
                            <li class="sub-menu__item">
                              <a href="#" class="menu-link menu-link_us-s"
                                >Overshirts</a
                              >
                            </li>
                            <li class="sub-menu__item">
                              <a href="#" class="menu-link menu-link_us-s"
                                >Jackets & Coats</a
                              >
                            </li>
                            <li class="sub-menu__item">
                              <a href="#" class="menu-link menu-link_us-s"
                                >Jeans</a
                              >
                            </li>
                            <li class="sub-menu__item">
                              <a href="#" class="menu-link menu-link_us-s"
                                >Trousers</a
                              >
                            </li>
                            <li class="sub-menu__item">
                              <a href="#" class="menu-link menu-link_us-s"
                                >Shorts and Bermudas</a
                              >
                            </li>
                            <li class="sub-menu__item">
                              <a href="#" class="menu-link menu-link_us-s"
                                >Shoes</a
                              >
                            </li>
                            <li class="sub-menu__item">
                              <a
                                href="shop3.html"
                                class="menu-link menu-link_us-s"
                                >Accessories</a
                              >
                            </li>
                            <li class="sub-menu__item">
                              <a href="#" class="menu-link menu-link_us-s"
                                >Dresses</a
                              >
                            </li>
                            <li class="sub-menu__item">
                              <a href="#" class="menu-link menu-link_us-s"
                                >Bags</a
                              >
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="tab-pane fade"
                    id="pills-item-2"
                    role="tabpanel"
                    aria-labelledby="pills-item-2-tab"
                  >
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna
                      aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                      ullamco laboris nisi ut aliquip ex ea commodo consequat.
                      Duis aute irure dolor in reprehenderit in voluptate velit
                      esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                    Elementum lectus a porta commodo suspendisse arcu, aliquam
                    lectus faucibus.
                  </div>
                  <div
                    class="tab-pane fade"
                    id="pills-item-3"
                    role="tabpanel"
                    aria-labelledby="pills-item-3-tab"
                  >
                    <p>
                      Sed ut perspiciatis unde omnis iste natus error sit
                      voluptatem accusantium doloremque laudantium, totam rem
                      aperiam, eaque ipsa quae ab illo inventore veritatis et
                      quasi architecto beatae vitae dicta sunt explicabo. Nemo
                      enim ipsam voluptatem quia voluptas sit aspernatur aut
                      odit aut fugit, sed quia consequuntur magni dolores eos
                      qui ratione voluptatem sequi nesciunt.
                    </p>
                    Ut enim ad minima veniam, quis nostrum exercitationem ullam
                    corporis suscipit laboriosam, nisi ut aliquid ex ea commodi
                    consequatur?
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="quickView" tabindex="-1">
      <div class="modal-dialog quick-view modal-dialog-centered">
        <div class="modal-content">
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
          <div class="product-single">
            <div class="product-single__media m-0">
              <div class="product-single__image position-relative w-100">
                <div
                  class="swiper-container js-swiper-slider"
                  data-settings='{
                  "slidesPerView": 1,
                  "slidesPerGroup": 1,
                  "effect": "none",
                  "loop": false,
                  "navigation": {
                    "nextEl": ".modal-dialog.quick-view .product-single__media .swiper-button-next",
                    "prevEl": ".modal-dialog.quick-view .product-single__media .swiper-button-prev"
                  }
                }'
                >
                  <div class="swiper-wrapper">
                    <div class="swiper-slide product-single__image-item">
                      <img
                        loading="lazy"
                        src="./images/products/quickview_1.jpg"
                        alt=""
                      />
                    </div>
                    <div class="swiper-slide product-single__image-item">
                      <img
                        loading="lazy"
                        src="./images/products/quickview_2.jpg"
                        alt=""
                      />
                    </div>
                    <div class="swiper-slide product-single__image-item">
                      <img
                        loading="lazy"
                        src="./images/products/quickview_3.jpg"
                        alt=""
                      />
                    </div>
                    <div class="swiper-slide product-single__image-item">
                      <img
                        loading="lazy"
                        src="./images/products/quickview_4.jpg"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="swiper-button-prev">
                    <svg
                      width="7"
                      height="11"
                      viewBox="0 0 7 11"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <use href="#icon_prev_sm" />
                    </svg>
                  </div>
                  <div class="swiper-button-next">
                    <svg
                      width="7"
                      height="11"
                      viewBox="0 0 7 11"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <use href="#icon_next_sm" />
                    </svg>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-single__detail">
              <h1 class="product-single__name">
                Lightweight Puffer Jacket With a Hood
              </h1>
              <div class="product-single__price">
                <span class="current-price">$449</span>
              </div>
              <div class="product-single__short-desc">
                <p>
                  Phasellus sed volutpat orci. Fusce eget lore mauris vehicula
                  elementum gravida nec dui. Aenean aliquam varius ipsum, non
                  ultricies tellus sodales eu. Donec dignissim viverra nunc, ut
                  aliquet magna posuere eget.
                </p>
              </div>
              <form name="addtocart-form" method="post">
                <div class="product-single__swatches">
                  <div class="product-swatch text-swatches">
                    <label>Sizes</label>
                    <div class="swatch-list">
                      <input type="radio" name="size" id="swatch-1" />
                      <label
                        class="swatch js-swatch"
                        for="swatch-1"
                        aria-label="Extra Small"
                        data-bs-toggle="tooltip"
                        data-bs-placement="top"
                        title="Extra Small"
                        >XS</label
                      >
                      <input type="radio" name="size" id="swatch-2" checked />
                      <label
                        class="swatch js-swatch"
                        for="swatch-2"
                        aria-label="Small"
                        data-bs-toggle="tooltip"
                        data-bs-placement="top"
                        title="Small"
                        >S</label
                      >
                      <input type="radio" name="size" id="swatch-3" />
                      <label
                        class="swatch js-swatch"
                        for="swatch-3"
                        aria-label="Middle"
                        data-bs-toggle="tooltip"
                        data-bs-placement="top"
                        title="Middle"
                        >M</label
                      >
                      <input type="radio" name="size" id="swatch-4" />
                      <label
                        class="swatch js-swatch"
                        for="swatch-4"
                        aria-label="Large"
                        data-bs-toggle="tooltip"
                        data-bs-placement="top"
                        title="Large"
                        >L</label
                      >
                      <input type="radio" name="size" id="swatch-5" />
                      <label
                        class="swatch js-swatch"
                        for="swatch-5"
                        aria-label="Extra Large"
                        data-bs-toggle="tooltip"
                        data-bs-placement="top"
                        title="Extra Large"
                        >XL</label
                      >
                    </div>
                    <a
                      href="#"
                      class="sizeguide-link"
                      data-bs-toggle="modal"
                      data-bs-target="#sizeGuide"
                      >Size Guide</a
                    >
                  </div>
                  <div class="product-swatch color-swatches">
                    <label>Color</label>
                    <div class="swatch-list">
                      <input type="radio" name="color" id="swatch-11" />
                      <label
                        class="swatch swatch-color js-swatch"
                        for="swatch-11"
                        aria-label="Black"
                        data-bs-toggle="tooltip"
                        data-bs-placement="top"
                        title="Black"
                        style="color: #222"
                      ></label>
                      <input type="radio" name="color" id="swatch-12" checked />
                      <label
                        class="swatch swatch-color js-swatch"
                        for="swatch-12"
                        aria-label="Red"
                        data-bs-toggle="tooltip"
                        data-bs-placement="top"
                        title="Red"
                        style="color: #c93a3e"
                      ></label>
                      <input type="radio" name="color" id="swatch-13" />
                      <label
                        class="swatch swatch-color js-swatch"
                        for="swatch-13"
                        aria-label="Grey"
                        data-bs-toggle="tooltip"
                        data-bs-placement="top"
                        title="Grey"
                        style="color: #e4e4e4"
                      ></label>
                    </div>
                  </div>
                </div>
                <div class="product-single__addtocart">
                  <div class="qty-control position-relative">
                    <input
                      type="number"
                      name="quantity"
                      value="1"
                      min="1"
                      class="qty-control__number text-center"
                    />
                    <div class="qty-control__reduce">-</div>
                    <div class="qty-control__increase">+</div>
                  </div>
                  <button
                    type="submit"
                    class="btn btn-primary btn-addtocart js-open-aside"
                    data-aside="cartDrawer"
                  >
                    Add to Cart
                  </button>
                </div>
              </form>
              <div class="product-single__addtolinks">
                <a href="#" class="menu-link menu-link_us-s add-to-wishlist"
                  ><svg
                    width="16"
                    height="16"
                    viewBox="0 0 20 20"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <use href="#icon_heart" /></svg
                  ><span>Add to Wishlist</span></a
                >
                <share-button class="share-button">
                  <button
                    class="menu-link menu-link_us-s to-share border-0 bg-transparent d-flex align-items-center"
                  >
                    <svg
                      width="16"
                      height="19"
                      viewBox="0 0 16 19"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <use href="#icon_sharing" />
                    </svg>
                  </button>
                  <details
                    id="Details-share-template__main"
                    class="m-1 xl:m-1.5"
                    hidden=""
                  >
                    <summary class="btn-solid m-1 xl:m-1.5 pt-3.5 pb-3 px-5">
                      +
                    </summary>
                    <div
                      id="Article-share-template__main"
                      class="share-button__fallback flex items-center absolute top-full left-0 w-full px-2 py-4 bg-container shadow-theme border-t z-10"
                    >
                      <div class="field grow mr-4">
                        <label class="field__label sr-only" for="url"
                          >Link</label
                        >
                        <input
                          type="text"
                          class="field__input w-full"
                          id="url"
                          value="https://uomo-crystal.myshopify.com/blogs/news/go-to-wellness-tips-for-mental-health"
                          placeholder="Link"
                          onclick="this.select();"
                          readonly=""
                        />
                      </div>
                      <button class="share-button__copy no-js-hidden">
                        <svg
                          class="icon icon-clipboard inline-block mr-1"
                          width="11"
                          height="13"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                          aria-hidden="true"
                          focusable="false"
                          viewBox="0 0 11 13"
                        >
                          <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M2 1a1 1 0 011-1h7a1 1 0 011 1v9a1 1 0 01-1 1V1H2zM1 2a1 1 0 00-1 1v9a1 1 0 001 1h7a1 1 0 001-1V3a1 1 0 00-1-1H1zm0 10V3h7v9H1z"
                            fill="currentColor"
                          ></path>
                        </svg>
                        <span class="sr-only">Copy link</span>
                      </button>
                    </div>
                  </details>
                </share-button>
                <script src="js/details-disclosure.js" defer="defer"></script>
                <script src="js/share.js" defer="defer"></script>
              </div>
              <div class="product-single__meta-info mb-0">
                <div class="meta-item">
                  <label>SKU:</label>
                  <span>N/A</span>
                </div>
                <div class="meta-item">
                  <label>Categories:</label>
                  <span>Casual & Urban Wear, Jackets, Men</span>
                </div>
                <div class="meta-item">
                  <label>Tags:</label>
                  <span>biker, black, bomber, leather</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="scrollTop" class="visually-hidden end-0"></div>

    <div class="page-overlay"></div>

    <script src="js/plugins/jquery.min.js"></script>
    <script src="js/plugins/bootstrap.bundle.min.js"></script>
    <script src="js/plugins/bootstrap-slider.min.js"></script>

    <script src="js/plugins/swiper.min.js"></script>
    <script src="js/plugins/countdown.js"></script>

    <script src="js/theme.js"></script>
  </body>
</html>
