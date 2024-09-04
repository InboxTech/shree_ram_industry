// for star printing in payment in word 
document.addEventListener('DOMContentLoaded', () => {
    const value = document.querySelector('.value');
    const dataDiv = document.querySelector('.data').textContent;
    const numberOfAsterisks = 150; 
    value.textContent = dataDiv + '*'.repeat(numberOfAsterisks);
});

// for chenging section
document.addEventListener('DOMContentLoaded', function() {
    const topButton = document.getElementById('setTop');
    const midButton = document.getElementById('setMid');
    const bottomButton = document.getElementById('setBottom');

    const topSection = document.getElementById('top');
    const midSection = document.getElementById('mid');
    const bottomSection = document.getElementById('bottom');

    const content = `
        <div class="row">
            <div class="col-sm-4">
                <p class="text-left"><strong>Akshar Surfaces LLC</strong><br>1150 E Yorba Linda Blvd<br>Placentia CA 92870<br>7145948655</p>
            </div>
            <div class="col-sm-4 d-flex justify-content-center">
                <p><strong>Wells Fargo</strong></p>
            </div>
            <div class="col-sm-4 row justify-content-end fs-5">
                011101
                <div class="row align-items-end fs-6">
                    <p class="border-bottom border-dark">10/2/2023</p>
                </div>        
            </div>
        </div>
        <div class="row align-items-end">
            <div class="col-sm-2">
                PAY TO THE ORDER OF
            </div>
            <div class="col-sm-7 border-bottom border-dark">
                Ametrine LLC
            </div>
            <strong class="" style="width:10px; font-size:20px;">$</strong>
            <div class="col-sm-2 border-bottom border-dark">
                **108,873.86
            </div>
        </div>
        <div class="row mt-3 align-items-end">
            <div class="col-sm-11 border-bottom border-dark">
                <div class="data" style="display: none;">One</div>
                <div class="value"></div>
            </div>
            <div class="col-sm-1">DOLLARS</div>
        </div>
        <div class="row mt-3">
            <div class="col-12 px-5">
                <p>Ametrine LLC<br>201 SE, 2nd Avenue, Suite 2705,<br>Miami, Florida - 33131</p>  
            </div>
        </div>
        <div class="row align-items-end justify-content-between">
            <div class="col-sm-6">
                MEMO &nbsp; Payment for Invoice 85 & 86
            </div>
            <div class="col-sm-4 border-bottom border-dark"></div>
        </div>
        <div class="row mt-2">
            <p class="routing text-center check-number">c011101c a121042882a7131744554c</p>
        </div>`;

    topButton.addEventListener('click', function() {
        resetSections();
        topSection.innerHTML = content;
    });

    midButton.addEventListener('click', function() {
        resetSections();
        midSection.innerHTML = content;
    });

    bottomButton.addEventListener('click', function() {
        resetSections();
        bottomSection.innerHTML = content;
    });

    function resetSections() {
        topSection.innerHTML = '';
        midSection.innerHTML = '';
        bottomSection.innerHTML = '';
    }
});


