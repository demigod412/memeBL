<div>
    <div class="row">
        <div class="col-12">

            
            <form action="">
                <div class="row">
                   

                    <div class="mt-4 col-md-6">
                        <h5 class="">Crypto Swap:</h5>
                        <div class="selectgroup">
                            <label class="selectgroup-item">
                                <input type="radio" class="selectgroup-input" name="cryptoswap"
                                    wire:click="updateModule('cryptoswap','true')"
                                    <?php echo e($mod['cryptoswap'] ? 'checked' : ''); ?>>
                                <span class="selectgroup-button">Enabled</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" class="selectgroup-input" name="cryptoswap"
                                    wire:click="updateModule('cryptoswap','false')"
                                    <?php echo e($mod['cryptoswap'] ? '' : 'checked'); ?>>
                                <span class="selectgroup-button">Disabled</span>
                            </label>
                        </div>
                        <div class="mt-2">
                            <small class="">If enabled, the system will display all
                                functionalities about crypto swapping on user dashboard.</small>
                        </div>
                    </div>


                    
                </div>
            </form>
        </div>
    </div>
</div>
<?php /**PATH /home/u935933003/domains/stagingmemebull.randsender.space/public_html/resources/views/livewire/admin/software-module.blade.php ENDPATH**/ ?>