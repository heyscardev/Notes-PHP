<div class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><?php echo $error["head"] ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><?php echo $error["body"] ?></p>
      </div>
      <div class="modal-footer">
        <a href="<?php echo $error["url"] ?>" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</a>
        
      </div>
    </div>
  </div>
</div>