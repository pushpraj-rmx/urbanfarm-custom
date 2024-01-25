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
        <div class="full-width_border border-2" style="border-color: #f5e6e0">
          <div class="shop-banner position-relative">
            <div class="background-img" style="background-color: #f5e6e0">
              <img
                loading="lazy"
                src="./images/shop/shop_banner_2.png"
                width="1759"
                height="420"
                alt="Pattern"
                class="slideshow-bg__img object-fit-cover"
              />
            </div>

            <div
              class="shop-banner__content container position-absolute start-50 top-50 translate-middle"
            >
              <h2
                class="h1 text-uppercase text-center fw-bold mb-3 mb-xl-4 mb-xl-5"
              >
                Shoes
              </h2>
              <ul
                class="d-flex justify-content-center flex-wrap list-unstyled text-uppercase h6"
              >
                <li class="me-3 me-xl-4 pe-1">
                  <a href="#" class="menu-link menu-link_us-s menu-link_active"
                    >StayHome</a
                  >
                </li>
                <li class="me-3 me-xl-4 pe-1">
                  <a href="#" class="menu-link menu-link_us-s">New In</a>
                </li>
                <li class="me-3 me-xl-4 pe-1">
                  <a href="#" class="menu-link menu-link_us-s">Jackets</a>
                </li>
                <li class="me-3 me-xl-4 pe-1">
                  <a href="#" class="menu-link menu-link_us-s">Hoodies</a>
                </li>
                <li class="me-3 me-xl-4 pe-1">
                  <a href="shop4.html" class="menu-link menu-link_us-s">Men</a>
                </li>
                <li class="me-3 me-xl-4 pe-1">
                  <a href="shop5.html" class="menu-link menu-link_us-s"
                    >Women</a
                  >
                </li>
                <li class="me-3 me-xl-4 pe-1">
                  <a href="#" class="menu-link menu-link_us-s">Trousers</a>
                </li>
                <li class="me-3 me-xl-4 pe-1">
                  <a href="shop3.html" class="menu-link menu-link_us-s"
                    >Accessories</a
                  >
                </li>
                <li class="me-3 me-xl-4 pe-1">
                  <a href="#" class="menu-link menu-link_us-s">Shoes</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <div class="mb-4 pb-lg-3"></div>

      <section class="shop-main container d-flex">
        <div class="shop-sidebar side-sticky bg-body" id="shopFilter">
          <div class="aside-header d-flex d-lg-none align-items-center">
            <h3 class="text-uppercase fs-6 mb-0">Filter By</h3>
            <button
              class="btn-close-lg js-close-aside btn-close-aside ms-auto"
            ></button>
          </div>

          <div class="pt-4 pt-lg-0"></div>

          <div class="accordion" id="categories-list">
            <div class="accordion-item mb-4 pb-3">
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
                <div class="accordion-body px-0 pb-0 pt-3">
                  <ul class="list list-inline mb-0">
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
            <div class="accordion-item mb-4 pb-3">
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
            <div class="accordion-item mb-4 pb-3">
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
            <div class="accordion-item mb-4 pb-3">
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
        </div>

        <div class="shop-list flex-grow-1">
          <div class="d-flex justify-content-between mb-4 pb-md-2">
            <div class="breadcrumb mb-0 d-none d-md-block flex-grow-1">
              <a
                href="#"
                class="menu-link menu-link_us-s text-uppercase fw-medium"
                >Home</a
              >
              <span class="breadcrumb-separator menu-link fw-medium ps-1 pe-1"
                >/</span
              >
              <a
                href="#"
                class="menu-link menu-link_us-s text-uppercase fw-medium"
                >The Shop</a
              >
            </div>

            <div
              class="shop-acs d-flex align-items-center justify-content-between justify-content-md-end flex-grow-1"
            >
              <select
                class="shop-acs__select form-select w-auto border-0 py-0 order-1 order-md-0"
                aria-label="Sort Items"
                name="total-number"
              >
                <option selected>Default Sorting</option>
                <option value="1">Featured</option>
                <option value="2">Best selling</option>
                <option value="3">Alphabetically, A-Z</option>
                <option value="3">Alphabetically, Z-A</option>
                <option value="3">Price, low to high</option>
                <option value="3">Price, high to low</option>
                <option value="3">Date, old to new</option>
                <option value="3">Date, new to old</option>
              </select>

              <div
                class="shop-asc__seprator mx-3 bg-light d-none d-md-block order-md-0"
              ></div>

              <div class="col-size align-items-center order-1 d-none d-lg-flex">
                <span class="text-uppercase fw-medium me-2">View</span>
                <button
                  class="btn-link fw-medium me-2 js-cols-size"
                  data-target="products-grid"
                  data-cols="2"
                >
                  2
                </button>
                <button
                  class="btn-link fw-medium me-2 js-cols-size"
                  data-target="products-grid"
                  data-cols="3"
                >
                  3
                </button>
                <button
                  class="btn-link fw-medium js-cols-size"
                  data-target="products-grid"
                  data-cols="4"
                >
                  4
                </button>
              </div>

              <div
                class="shop-filter d-flex align-items-center order-0 order-md-3 d-lg-none"
              >
                <button
                  class="btn-link btn-link_f d-flex align-items-center ps-0 js-open-aside"
                  data-aside="shopFilter"
                >
                  <svg
                    class="d-inline-block align-middle me-2"
                    width="14"
                    height="10"
                    viewBox="0 0 14 10"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <use href="#icon_filter" />
                  </svg>
                  <span
                    class="text-uppercase fw-medium d-inline-block align-middle"
                    >Filter</span
                  >
                </button>
              </div>
            </div>
          </div>

          <div
            class="products-grid row row-cols-2 row-cols-md-3"
            id="products-grid"
          >
            <div class="product-card-wrapper">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                <div class="pc__img-wrapper">
                  <div
                    class="swiper-container background-img js-swiper-slider"
                    data-settings='{"resizeObserver": true}'
                  >
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <a href="product1_simple.html"
                          ><img
                            loading="lazy"
                            src="./images/products/product_1.jpg"
                            width="330"
                            height="400"
                            alt="Cropped Faux leather Jacket"
                            class="pc__img"
                        /></a>
                      </div>
                      <div class="swiper-slide">
                        <a href="product1_simple.html"
                          ><img
                            loading="lazy"
                            src="./images/products/product_1-1.jpg"
                            width="330"
                            height="400"
                            alt="Cropped Faux leather Jacket"
                            class="pc__img"
                        /></a>
                      </div>
                    </div>
                    <span class="pc__img-prev"
                      ><svg
                        width="7"
                        height="11"
                        viewBox="0 0 7 11"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <use href="#icon_prev_sm" /></svg
                    ></span>
                    <span class="pc__img-next"
                      ><svg
                        width="7"
                        height="11"
                        viewBox="0 0 7 11"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <use href="#icon_next_sm" /></svg
                    ></span>
                  </div>
                  <button
                    class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                    data-aside="cartDrawer"
                    title="Add To Cart"
                  >
                    Add To Cart
                  </button>
                </div>

                <div class="pc__info position-relative">
                  <p class="pc__category">Dresses</p>
                  <h6 class="pc__title">
                    <a href="product1_simple.html"
                      >Cropped Faux Leather Jacket</a
                    >
                  </h6>
                  <div class="product-card__price d-flex">
                    <span class="money price">$29</span>
                  </div>
                  <div class="product-card__review d-flex align-items-center">
                    <div class="reviews-group d-flex">
                      <svg
                        class="review-star"
                        viewBox="0 0 9 9"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <use href="#icon_star" />
                      </svg>
                      <svg
                        class="review-star"
                        viewBox="0 0 9 9"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <use href="#icon_star" />
                      </svg>
                      <svg
                        class="review-star"
                        viewBox="0 0 9 9"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <use href="#icon_star" />
                      </svg>
                      <svg
                        class="review-star"
                        viewBox="0 0 9 9"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <use href="#icon_star" />
                      </svg>
                      <svg
                        class="review-star"
                        viewBox="0 0 9 9"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <use href="#icon_star" />
                      </svg>
                    </div>
                    <span
                      class="reviews-note text-lowercase text-secondary ms-1"
                      >8k+ reviews</span
                    >
                  </div>

                  <button
                    class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist"
                    title="Add To Wishlist"
                  >
                    <svg
                      width="16"
                      height="16"
                      viewBox="0 0 20 20"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <use href="#icon_heart" />
                    </svg>
                  </button>
                </div>
              </div>
            </div>

            <div class="product-card-wrapper">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                <div class="pc__img-wrapper">
                  <div
                    class="swiper-container background-img js-swiper-slider"
                    data-settings='{"resizeObserver": true}'
                  >
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <a href="product1_simple.html"
                          ><img
                            loading="lazy"
                            src="./images/products/product_2.jpg"
                            width="330"
                            height="400"
                            alt="Cropped Faux leather Jacket"
                            class="pc__img"
                        /></a>
                      </div>
                      <div class="swiper-slide">
                        <a href="product1_simple.html"
                          ><img
                            loading="lazy"
                            src="./images/products/product_2-1.jpg"
                            width="330"
                            height="400"
                            alt="Cropped Faux leather Jacket"
                            class="pc__img"
                        /></a>
                      </div>
                    </div>
                    <span class="pc__img-prev"
                      ><svg
                        width="7"
                        height="11"
                        viewBox="0 0 7 11"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <use href="#icon_prev_sm" /></svg
                    ></span>
                    <span class="pc__img-next"
                      ><svg
                        width="7"
                        height="11"
                        viewBox="0 0 7 11"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <use href="#icon_next_sm" /></svg
                    ></span>
                  </div>
                  <button
                    class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                    data-aside="cartDrawer"
                    title="Add To Cart"
                  >
                    Add To Cart
                  </button>
                </div>

                <div class="pc__info position-relative">
                  <p class="pc__category">Dresses</p>
                  <h6 class="pc__title">
                    <a href="product1_simple.html">Calvin Shorts</a>
                  </h6>
                  <div class="product-card__price d-flex">
                    <span class="money price">$62</span>
                  </div>

                  <div class="d-flex align-items-center mt-1">
                    <a
                      href="#"
                      class="swatch-color pc__swatch-color"
                      style="color: #222222"
                    ></a>
                    <a
                      href="#"
                      class="swatch-color swatch_active pc__swatch-color"
                      style="color: #b9a16b"
                    ></a>
                    <a
                      href="#"
                      class="swatch-color pc__swatch-color"
                      style="color: #f5e6e0"
                    ></a>
                  </div>

                  <button
                    class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist"
                    title="Add To Wishlist"
                  >
                    <svg
                      width="16"
                      height="16"
                      viewBox="0 0 20 20"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <use href="#icon_heart" />
                    </svg>
                  </button>
                </div>

                <div
                  class="pc-labels position-absolute top-0 start-0 w-100 d-flex justify-content-between"
                >
                  <div class="pc-labels__right ms-auto">
                    <span class="pc-label pc-label_sale d-block text-white"
                      >-67%</span
                    >
                  </div>
                </div>
              </div>
            </div>

            <div class="product-card-wrapper">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                <div class="pc__img-wrapper">
                  <div
                    class="swiper-container background-img js-swiper-slider"
                    data-settings='{"resizeObserver": true}'
                  >
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <a href="product1_simple.html"
                          ><img
                            loading="lazy"
                            src="./images/products/product_3.jpg"
                            width="330"
                            height="400"
                            alt="Cropped Faux leather Jacket"
                            class="pc__img"
                        /></a>
                      </div>
                      <div class="swiper-slide">
                        <a href="product1_simple.html"
                          ><img
                            loading="lazy"
                            src="./images/products/product_3-1.jpg"
                            width="330"
                            height="400"
                            alt="Cropped Faux leather Jacket"
                            class="pc__img"
                        /></a>
                      </div>
                    </div>
                    <span class="pc__img-prev"
                      ><svg
                        width="7"
                        height="11"
                        viewBox="0 0 7 11"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <use href="#icon_prev_sm" /></svg
                    ></span>
                    <span class="pc__img-next"
                      ><svg
                        width="7"
                        height="11"
                        viewBox="0 0 7 11"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <use href="#icon_next_sm" /></svg
                    ></span>
                  </div>
                  <button
                    class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                    data-aside="cartDrawer"
                    title="Add To Cart"
                  >
                    Add To Cart
                  </button>
                </div>

                <div class="pc__info position-relative">
                  <p class="pc__category">Dresses</p>
                  <h6 class="pc__title">
                    <a href="product1_simple.html">Kirby T-Shirt</a>
                  </h6>
                  <div class="product-card__price d-flex">
                    <span class="money price">$17</span>
                  </div>

                  <button
                    class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist"
                    title="Add To Wishlist"
                  >
                    <svg
                      width="16"
                      height="16"
                      viewBox="0 0 20 20"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <use href="#icon_heart" />
                    </svg>
                  </button>
                </div>
              </div>
            </div>

            <div class="product-card-wrapper">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                <div class="pc__img-wrapper">
                  <div
                    class="swiper-container background-img js-swiper-slider"
                    data-settings='{"resizeObserver": true}'
                  >
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <a href="product1_simple.html"
                          ><img
                            loading="lazy"
                            src="./images/products/product_4.jpg"
                            width="330"
                            height="400"
                            alt="Cropped Faux leather Jacket"
                            class="pc__img"
                        /></a>
                      </div>
                      <div class="swiper-slide">
                        <a href="product1_simple.html"
                          ><img
                            loading="lazy"
                            src="./images/products/product_4-1.jpg"
                            width="330"
                            height="400"
                            alt="Cropped Faux leather Jacket"
                            class="pc__img"
                        /></a>
                      </div>
                    </div>
                    <span class="pc__img-prev"
                      ><svg
                        width="7"
                        height="11"
                        viewBox="0 0 7 11"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <use href="#icon_prev_sm" /></svg
                    ></span>
                    <span class="pc__img-next"
                      ><svg
                        width="7"
                        height="11"
                        viewBox="0 0 7 11"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <use href="#icon_next_sm" /></svg
                    ></span>
                  </div>
                  <button
                    class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                    data-aside="cartDrawer"
                    title="Add To Cart"
                  >
                    Add To Cart
                  </button>
                </div>

                <div class="pc__info position-relative">
                  <p class="pc__category">Dresses</p>
                  <h6 class="pc__title">
                    <a href="product1_simple.html">Cableknit Shawl</a>
                  </h6>
                  <div class="product-card__price d-flex">
                    <span class="money price price-old">$129</span>
                    <span class="money price price-sale">$99</span>
                  </div>

                  <button
                    class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist"
                    title="Add To Wishlist"
                  >
                    <svg
                      width="16"
                      height="16"
                      viewBox="0 0 20 20"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <use href="#icon_heart" />
                    </svg>
                  </button>
                </div>

                <div
                  class="pc-labels position-absolute top-0 start-0 w-100 d-flex justify-content-between"
                >
                  <div class="pc-labels__left">
                    <span class="pc-label pc-label_new d-block bg-white"
                      >NEW</span
                    >
                  </div>
                </div>
              </div>
            </div>

            <div class="product-card-wrapper">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                <div class="pc__img-wrapper">
                  <div
                    class="swiper-container background-img js-swiper-slider"
                    data-settings='{"resizeObserver": true}'
                  >
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <a href="product1_simple.html"
                          ><img
                            loading="lazy"
                            src="./images/products/product_5.jpg"
                            width="330"
                            height="400"
                            alt="Cropped Faux leather Jacket"
                            class="pc__img"
                        /></a>
                      </div>
                      <div class="swiper-slide">
                        <a href="product1_simple.html"
                          ><img
                            loading="lazy"
                            src="./images/products/product_5-1.jpg"
                            width="330"
                            height="400"
                            alt="Cropped Faux leather Jacket"
                            class="pc__img"
                        /></a>
                      </div>
                    </div>
                    <span class="pc__img-prev"
                      ><svg
                        width="7"
                        height="11"
                        viewBox="0 0 7 11"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <use href="#icon_prev_sm" /></svg
                    ></span>
                    <span class="pc__img-next"
                      ><svg
                        width="7"
                        height="11"
                        viewBox="0 0 7 11"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <use href="#icon_next_sm" /></svg
                    ></span>
                  </div>
                  <button
                    class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                    data-aside="cartDrawer"
                    title="Add To Cart"
                  >
                    Add To Cart
                  </button>
                </div>

                <div class="pc__info position-relative">
                  <p class="pc__category">Dresses</p>
                  <h6 class="pc__title">
                    <a href="product1_simple.html">Colorful Jacket</a>
                  </h6>
                  <div class="product-card__price d-flex">
                    <span class="money price">$29</span>
                  </div>

                  <button
                    class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist"
                    title="Add To Wishlist"
                  >
                    <svg
                      width="16"
                      height="16"
                      viewBox="0 0 20 20"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <use href="#icon_heart" />
                    </svg>
                  </button>
                </div>
              </div>
            </div>

            <div class="product-card-wrapper">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                <div class="pc__img-wrapper">
                  <div
                    class="swiper-container background-img js-swiper-slider"
                    data-settings='{"resizeObserver": true}'
                  >
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <a href="product1_simple.html"
                          ><img
                            loading="lazy"
                            src="./images/products/product_6.jpg"
                            width="330"
                            height="400"
                            alt="Cropped Faux leather Jacket"
                            class="pc__img"
                        /></a>
                      </div>
                      <div class="swiper-slide">
                        <a href="product1_simple.html"
                          ><img
                            loading="lazy"
                            src="./images/products/product_6-1.jpg"
                            width="330"
                            height="400"
                            alt="Cropped Faux leather Jacket"
                            class="pc__img"
                        /></a>
                      </div>
                    </div>
                    <span class="pc__img-prev"
                      ><svg
                        width="7"
                        height="11"
                        viewBox="0 0 7 11"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <use href="#icon_prev_sm" /></svg
                    ></span>
                    <span class="pc__img-next"
                      ><svg
                        width="7"
                        height="11"
                        viewBox="0 0 7 11"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <use href="#icon_next_sm" /></svg
                    ></span>
                  </div>
                  <button
                    class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                    data-aside="cartDrawer"
                    title="Add To Cart"
                  >
                    Add To Cart
                  </button>
                </div>

                <div class="pc__info position-relative">
                  <p class="pc__category">Dresses</p>
                  <h6 class="pc__title">
                    <a href="product1_simple.html"
                      >Shirt In Botanical Cheetah Print</a
                    >
                  </h6>
                  <div class="product-card__price d-flex">
                    <span class="money price">$62</span>
                  </div>

                  <button
                    class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist"
                    title="Add To Wishlist"
                  >
                    <svg
                      width="16"
                      height="16"
                      viewBox="0 0 20 20"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <use href="#icon_heart" />
                    </svg>
                  </button>
                </div>
              </div>
            </div>

            <div class="product-card-wrapper">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                <div class="pc__img-wrapper">
                  <div
                    class="swiper-container background-img js-swiper-slider"
                    data-settings='{"resizeObserver": true}'
                  >
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <a href="product1_simple.html"
                          ><img
                            loading="lazy"
                            src="./images/products/product_7.jpg"
                            width="330"
                            height="400"
                            alt="Cropped Faux leather Jacket"
                            class="pc__img"
                        /></a>
                      </div>
                      <div class="swiper-slide">
                        <a href="product1_simple.html"
                          ><img
                            loading="lazy"
                            src="./images/products/product_7-1.jpg"
                            width="330"
                            height="400"
                            alt="Cropped Faux leather Jacket"
                            class="pc__img"
                        /></a>
                      </div>
                    </div>
                    <span class="pc__img-prev"
                      ><svg
                        width="7"
                        height="11"
                        viewBox="0 0 7 11"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <use href="#icon_prev_sm" /></svg
                    ></span>
                    <span class="pc__img-next"
                      ><svg
                        width="7"
                        height="11"
                        viewBox="0 0 7 11"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <use href="#icon_next_sm" /></svg
                    ></span>
                  </div>
                  <button
                    class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                    data-aside="cartDrawer"
                    title="Add To Cart"
                  >
                    Add To Cart
                  </button>
                </div>

                <div class="pc__info position-relative">
                  <p class="pc__category">Dresses</p>
                  <h6 class="pc__title">
                    <a href="product1_simple.html">Cotton Jersey T-Shirt</a>
                  </h6>
                  <div class="product-card__price d-flex">
                    <span class="money price">$17</span>
                  </div>

                  <button
                    class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist"
                    title="Add To Wishlist"
                  >
                    <svg
                      width="16"
                      height="16"
                      viewBox="0 0 20 20"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <use href="#icon_heart" />
                    </svg>
                  </button>
                </div>
              </div>
            </div>

            <div class="product-card-wrapper">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                <div class="pc__img-wrapper">
                  <div
                    class="swiper-container background-img js-swiper-slider"
                    data-settings='{"resizeObserver": true}'
                  >
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <a href="product1_simple.html"
                          ><img
                            loading="lazy"
                            src="./images/products/product_8.jpg"
                            width="330"
                            height="400"
                            alt="Cropped Faux leather Jacket"
                            class="pc__img"
                        /></a>
                      </div>
                      <div class="swiper-slide">
                        <a href="product1_simple.html"
                          ><img
                            loading="lazy"
                            src="./images/products/product_8-1.jpg"
                            width="330"
                            height="400"
                            alt="Cropped Faux leather Jacket"
                            class="pc__img"
                        /></a>
                      </div>
                    </div>
                    <span class="pc__img-prev"
                      ><svg
                        width="7"
                        height="11"
                        viewBox="0 0 7 11"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <use href="#icon_prev_sm" /></svg
                    ></span>
                    <span class="pc__img-next"
                      ><svg
                        width="7"
                        height="11"
                        viewBox="0 0 7 11"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <use href="#icon_next_sm" /></svg
                    ></span>
                  </div>
                  <button
                    class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                    data-aside="cartDrawer"
                    title="Add To Cart"
                  >
                    Add To Cart
                  </button>
                </div>

                <div class="pc__info position-relative">
                  <p class="pc__category">Dresses</p>
                  <h6 class="pc__title">
                    <a href="product1_simple.html">Zessi Dresses</a>
                  </h6>
                  <div class="product-card__price d-flex">
                    <span class="money price price-old">$129</span>
                    <span class="money price price-sale">$99</span>
                  </div>

                  <button
                    class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist"
                    title="Add To Wishlist"
                  >
                    <svg
                      width="16"
                      height="16"
                      viewBox="0 0 20 20"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <use href="#icon_heart" />
                    </svg>
                  </button>
                </div>
              </div>
            </div>

            <div class="product-card-wrapper">
              <div class="product-card mb-3 mb-md-4 mb-xxl-5">
                <div class="pc__img-wrapper">
                  <div
                    class="swiper-container background-img js-swiper-slider"
                    data-settings='{"resizeObserver": true}'
                  >
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <a href="product1_simple.html"
                          ><img
                            loading="lazy"
                            src="./images/products/product_9.jpg"
                            width="330"
                            height="400"
                            alt="Cropped Faux leather Jacket"
                            class="pc__img"
                        /></a>
                      </div>
                      <div class="swiper-slide">
                        <a href="product1_simple.html"
                          ><img
                            loading="lazy"
                            src="./images/products/product_9-1.jpg"
                            width="330"
                            height="400"
                            alt="Cropped Faux leather Jacket"
                            class="pc__img"
                        /></a>
                      </div>
                    </div>
                    <span class="pc__img-prev"
                      ><svg
                        width="7"
                        height="11"
                        viewBox="0 0 7 11"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <use href="#icon_prev_sm" /></svg
                    ></span>
                    <span class="pc__img-next"
                      ><svg
                        width="7"
                        height="11"
                        viewBox="0 0 7 11"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <use href="#icon_next_sm" /></svg
                    ></span>
                  </div>
                  <button
                    class="pc__atc btn anim_appear-bottom btn position-absolute border-0 text-uppercase fw-medium js-add-cart js-open-aside"
                    data-aside="cartDrawer"
                    title="Add To Cart"
                  >
                    Add To Cart
                  </button>
                </div>

                <div class="pc__info position-relative">
                  <p class="pc__category">Dresses</p>
                  <h6 class="pc__title">
                    <a href="product1_simple.html"
                      >Cropped Faux Leather Jacket</a
                    >
                  </h6>
                  <div class="product-card__price d-flex">
                    <span class="money price">$29</span>
                  </div>
                  <div class="product-card__review d-flex align-items-center">
                    <div class="reviews-group d-flex">
                      <svg
                        class="review-star"
                        viewBox="0 0 9 9"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <use href="#icon_star" />
                      </svg>
                      <svg
                        class="review-star"
                        viewBox="0 0 9 9"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <use href="#icon_star" />
                      </svg>
                      <svg
                        class="review-star"
                        viewBox="0 0 9 9"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <use href="#icon_star" />
                      </svg>
                      <svg
                        class="review-star"
                        viewBox="0 0 9 9"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <use href="#icon_star" />
                      </svg>
                      <svg
                        class="review-star"
                        viewBox="0 0 9 9"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <use href="#icon_star" />
                      </svg>
                    </div>
                    <span
                      class="reviews-note text-lowercase text-secondary ms-1"
                      >8k+ reviews</span
                    >
                  </div>

                  <button
                    class="pc__btn-wl position-absolute top-0 end-0 bg-transparent border-0 js-add-wishlist"
                    title="Add To Wishlist"
                  >
                    <svg
                      width="16"
                      height="16"
                      viewBox="0 0 20 20"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <use href="#icon_heart" />
                    </svg>
                  </button>
                </div>
              </div>
            </div>
          </div>

          <nav
            class="shop-pages d-flex justify-content-between mt-3"
            aria-label="Page navigation"
          >
            <a href="#" class="btn-link d-inline-flex align-items-center">
              <svg
                class="me-1"
                width="7"
                height="11"
                viewBox="0 0 7 11"
                xmlns="http://www.w3.org/2000/svg"
              >
                <use href="#icon_prev_sm" />
              </svg>
              <span class="fw-medium">PREV</span>
            </a>
            <ul class="pagination mb-0">
              <li class="page-item">
                <a class="btn-link px-1 mx-2 btn-link_active" href="#">1</a>
              </li>
              <li class="page-item">
                <a class="btn-link px-1 mx-2" href="#">2</a>
              </li>
              <li class="page-item">
                <a class="btn-link px-1 mx-2" href="#">3</a>
              </li>
              <li class="page-item">
                <a class="btn-link px-1 mx-2" href="#">4</a>
              </li>
            </ul>
            <a href="#" class="btn-link d-inline-flex align-items-center">
              <span class="fw-medium me-1">NEXT</span>
              <svg
                width="7"
                height="11"
                viewBox="0 0 7 11"
                xmlns="http://www.w3.org/2000/svg"
              >
                <use href="#icon_next_sm" />
              </svg>
            </a>
          </nav>
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
