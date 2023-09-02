<div id="quickview-content">
    <!-- Load product content -->
</div>

<div id="quickview-bg-block">
    <!-- Background -->
</div>

<div class="quickview-load-img">
    <img src="https://dspices.in/image/catalog/ajax-loader.gif" alt="" />
</div>

<div class="lightbox-container lbo-quickview"></div>

<input type="hidden" id="qv-text-close" value="Close" />

<script type="text/javascript">
    $('#quickview-bg-block').click(function () {
        ptquickview.closeQVFrame();
    })

    if($('#product-product').length) {
        $('.lightbox-container.lbo-quickview').remove();
    }
</script>
