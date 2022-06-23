@extends('layouts.master')

@section('home')


<iframe class="full-screen-preview__frame" src="http://www.bamons.com/index.php?option=com_fireboard&Itemid=26" name="preview-frame" frameborder="0" noresize="noresize" data-view="fullScreenPreview" >
</iframe>
<iframe style="display: none;"></iframe>

<script>
      //function to fix height of iframe!
      var calcHeight = function() {
        // var headerDimensions = $('.preview__header').height();
        $('.full-screen-preview__frame').height($(window).height());
      }

      $(document).ready(function() {
        calcHeight();
      });

      $(window).resize(function() {
        calcHeight();
      }).load(function() {
        calcHeight();
      });
    </script>

@stop