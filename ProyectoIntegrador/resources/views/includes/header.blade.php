<div class="containerHead">
<nav class="barra">
  <a href="/viewss/inicio"><img src="/images/logo.PNG" id="logo" alt="logo"></a>
  <ul> 
    <li><a href="/viewss/carrito">Carrito</a></li>
    <li><a href="/viewss/contacto">Contáctanos</a></li>
    <li><a href="/viewss/faq">Preguntas Frecuentes</a></li>
    
    
  </ul>
</nav>
              <div>
      @guest
 @else
                            
                                <p id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre> Usuario:  
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </p>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit()">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                                        @csrf
                                    </form>
                               </div>

                        @endguest
    </div>
</div>