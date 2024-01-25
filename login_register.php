<?php include 'includes/header.php'?>
    <main>
      <div class="mb-4 pb-4"></div>
      <section class="login-register container">
        <h2 class="d-none">Login & Register</h2>
        <ul class="nav nav-tabs mb-5" id="login_register" role="tablist">
          <li class="nav-item" role="presentation">
            <a
              class="nav-link nav-link_underscore active"
              id="login-tab"
              data-bs-toggle="tab"
              href="#tab-item-login"
              role="tab"
              aria-controls="tab-item-login"
              aria-selected="true"
              >Login</a
            >
          </li>
          <li class="nav-item" role="presentation">
            <a
              class="nav-link nav-link_underscore"
              id="register-tab"
              data-bs-toggle="tab"
              href="#tab-item-register"
              role="tab"
              aria-controls="tab-item-register"
              aria-selected="false"
              >Register</a
            >
          </li>
        </ul>
        <div class="tab-content pt-2" id="login_register_tab_content">
          <div
            class="tab-pane fade show active"
            id="tab-item-login"
            role="tabpanel"
            aria-labelledby="login-tab"
          >
            <div class="login-form">
              <form name="login-form" class="needs-validation" novalidate>
                <div class="form-floating mb-3">
                  <input
                    name="login_email"
                    type="email"
                    class="form-control form-control_gray"
                    id="customerNameEmailInput1"
                    placeholder="Email address *"
                    required
                  />
                  <label for="customerNameEmailInput1">Email address *</label>
                </div>

                <div class="pb-3"></div>

                <div class="form-floating mb-3">
                  <input
                    name="login_password"
                    type="password"
                    class="form-control form-control_gray"
                    id="customerPasswodInput"
                    placeholder="Password *"
                    required
                  />
                  <label for="customerPasswodInput">Password *</label>
                </div>

                <div class="d-flex align-items-center mb-3 pb-2">
                  <div class="form-check mb-0">
                    <input
                      name="remember"
                      class="form-check-input form-check-input_fill"
                      type="checkbox"
                      value=""
                      id="flexCheckDefault1"
                    />
                    <label
                      class="form-check-label text-secondary"
                      for="flexCheckDefault1"
                      >Remember me</label
                    >
                  </div>
                  <a href="reset_password.php" class="btn-text ms-auto"
                    >Lost password?</a
                  >
                </div>

                <button
                  class="btn btn-primary w-100 text-uppercase"
                  type="submit"
                >
                  Log In
                </button>

                <div class="customer-option mt-4 text-center">
                  <span class="text-secondary">No account yet?</span>
                  <a href="#register-tab" class="btn-text js-show-register"
                    >Create Account</a
                  >
                </div>
              </form>
            </div>
          </div>
          <div
            class="tab-pane fade"
            id="tab-item-register"
            role="tabpanel"
            aria-labelledby="register-tab"
          >
            <div class="register-form">
              <form name="register-form" class="needs-validation" novalidate>
                <div class="form-floating mb-3">
                  <input
                    name="register_username"
                    type="text"
                    class="form-control form-control_gray"
                    id="customerNameRegisterInput"
                    placeholder="Username"
                    required
                  />
                  <label for="customerNameRegisterInput">Username</label>
                </div>

                <div class="pb-3"></div>

                <div class="form-floating mb-3">
                  <input
                    name="register_email"
                    type="email"
                    class="form-control form-control_gray"
                    id="customerEmailRegisterInput"
                    placeholder="Email address *"
                    required
                  />
                  <label for="customerEmailRegisterInput"
                    >Email address *</label
                  >
                </div>

                <div class="pb-3"></div>

                <div class="form-floating mb-3">
                  <input
                    name="register_password"
                    type="password"
                    class="form-control form-control_gray"
                    id="customerPasswodRegisterInput"
                    placeholder="Password *"
                    required
                  />
                  <label for="customerPasswodRegisterInput">Password *</label>
                </div>

                <div class="d-flex align-items-center mb-3 pb-2">
                  <p class="m-0">
                    Your personal data will be used to support your experience
                    throughout this website, to manage access to your account,
                    and for other purposes described in our privacy policy.
                  </p>
                </div>

                <button
                  class="btn btn-primary w-100 text-uppercase"
                  type="submit"
                >
                  Register
                </button>
              </form>
            </div>
          </div>
        </div>
      </section>
    </main>

    <div class="mb-5 pb-xl-5"></div>

    <footer class="footer footer_type_1">
      <div class="footer-middle container">
        <div class="row row-cols-lg-5 row-cols-2">
          <div class="footer-column footer-store-info col-12 mb-4 mb-lg-0">
            <div class="logo">
              <a href="../index.php">
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
            <h6 class="sub-menu__title text-uppercase">Company</h6>
            <ul class="sub-menu__list list-unstyled">
              <li class="sub-menu__item">
                <a href="about.php" class="menu-link menu-link_us-s"
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
                <a href="blog_list1.php" class="menu-link menu-link_us-s"
                  >Blog</a
                >
              </li>
              <li class="sub-menu__item">
                <a href="contact.php" class="menu-link menu-link_us-s"
                  >Contact Us</a
                >
              </li>
            </ul>
          </div>

          <div class="footer-column footer-menu mb-4 mb-lg-0">
            <h6 class="sub-menu__title text-uppercase">Shop</h6>
            <ul class="sub-menu__list list-unstyled">
              <li class="sub-menu__item">
                <a href="shop2.php" class="menu-link menu-link_us-s"
                  >New Arrivals</a
                >
              </li>
              <li class="sub-menu__item">
                <a href="shop3.php" class="menu-link menu-link_us-s"
                  >Accessories</a
                >
              </li>
              <li class="sub-menu__item">
                <a href="shop4.php" class="menu-link menu-link_us-s">Men</a>
              </li>
              <li class="sub-menu__item">
                <a href="shop5.php" class="menu-link menu-link_us-s">Women</a>
              </li>
              <li class="sub-menu__item">
                <a href="shop1.php" class="menu-link menu-link_us-s"
                  >Shop All</a
                >
              </li>
            </ul>
          </div>

          <div class="footer-column footer-menu mb-4 mb-lg-0">
            <h6 class="sub-menu__title text-uppercase">Help</h6>
            <ul class="sub-menu__list list-unstyled">
              <li class="sub-menu__item">
                <a href="#" class="menu-link menu-link_us-s"
                  >Customer Service</a
                >
              </li>
              <li class="sub-menu__item">
                <a
                  href="account_dashboard.php"
                  class="menu-link menu-link_us-s"
                  >My Account</a
                >
              </li>
              <li class="sub-menu__item">
                <a href="store_location.php" class="menu-link menu-link_us-s"
                  >Find a Store</a
                >
              </li>
              <li class="sub-menu__item">
                <a href="#" class="menu-link menu-link_us-s">Legal & Privacy</a>
              </li>
              <li class="sub-menu__item">
                <a href="contact.php" class="menu-link menu-link_us-s"
                  >Contact</a
                >
              </li>
              <li class="sub-menu__item">
                <a href="#" class="menu-link menu-link_us-s">Gift Card</a>
              </li>
            </ul>
          </div>

          <div class="footer-column footer-newsletter col-12 mb-4 mb-lg-0">
            <h6 class="sub-menu__title text-uppercase">Subscribe</h6>
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
            href="../index.php"
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
            href="../index.php"
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
            href="../index.php"
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
              <a href="reset_password.php" class="btn-text ms-auto"
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
        <a href="shop_cart.php" class="btn btn-light mt-3 d-block"
          >View Cart</a
        >
        <a href="shop_checkout.php" class="btn btn-primary mt-3 d-block"
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
                                href="shop3.php"
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
                                href="shop3.php"
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
                                href="shop3.php"
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
    <script src="js/plugins/jquery.fancybox.js"></script>

    <script src="js/theme.js"></script>
  </body>
</html>
