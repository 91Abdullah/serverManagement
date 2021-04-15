<footer class="footer">
  <div class=" container-fluid ">
    <nav>
      <ul>
        <li>
          {{-- <a href="https://www.creative-tim.com" target="_blank">
            {{__(" Creative Tim")}}
          </a> --}}
        </li>
        <li>
          @can('view-documentation')
          <a href="{{route('docs.index')}}" target="_blank">
            {{__("Documentation")}}
          </a>
          @endcan
        </li>
        <li>
          {{-- <a href="http://blog.creative-tim.com" target="_blank">
            {{__(" Blog")}}
          </a> --}}
        </li>
        {{-- <li>
          <a href="https://www.updivision.com" target="_blank">
            {{__(" Updivision")}}</a>
        </li> --}}
      </ul>
    </nav>
    <div class="copyright" id="copyright">
      &copy;
      <script>
        document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
      </script>, <strong>TeleCard</strong>{{__(" Designed by")}}
      <a href="#" target="_blank">{{__(" DevTeam")}}</a>{{__(" . Coded by")}}
      <a href="#" target="_blank">{{__(" DevTeam ")}}</a>
    </div>
  </div>
</footer>