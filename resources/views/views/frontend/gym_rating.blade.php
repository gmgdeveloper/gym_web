@include('frontend.layouts.gym_rating_header')
<style>
    .RatingSliderBox__StyledRatingSliderBox-skwa8i-0 {
        width: 50px;
        height: 50px;
        margin: 5px;
        background-color: gray; /* Default color */
    }

    #box1:hover {
        background-color: yellow; /* Hover color for the first box */
    }

    /* Default clicked colors */
    .clicked-1 { background-color: red; }
    .clicked-2 { background-color: blue; }
    .clicked-3 { background-color: green; }
    .clicked-4 { background-color: purple; }
    .clicked-5 { background-color: orange; }
</style>
<div class="PageWrapper__StyledPageWrapper-sc-3p8f0h-0 lcpsHk RateSchool__StyledAddRatingSchoolPage-sc-1cq0cnj-0 HLiKN">
    <form role="form" class="RateSchool__StyledAddRatingSchoolForm-sc-1cq0cnj-1 hafHAo">
        <div class="FieldWrapper__StyledFieldWrapper-sc-1qtyg1n-0 ebCnIf FormController__StyledFormErrors-sc-17e9grp-0 jHYIoJ">
            <div class="FieldWrapper__StyledErrorContainer-sc-1qtyg1n-1 lbqXUp"></div>
        </div>
        <div class="FormCard__FormCardContainer-sc-16ra1la-0 kStJld">
            <div data-testid="FORMCARD_TESTID" class="FormCard__StyledFormCard-sc-16ra1la-1 bUsHOg">
                <div class="FormCard__StyledFormCardTitle-sc-16ra1la-2 bNqnap">Reputation<span>*</span></div>
                <div class="FormCard__StyledFormCardContent-sc-16ra1la-4 jFzfvl">
                    <div class="RatingSlider__StyledRatingSlider-qmpn39-0 cUTwSH">
                        <div class="FieldWrapper__StyledFieldWrapper-sc-1qtyg1n-0 ebCnIf RatingSlider__HiddenFormSlider-qmpn39-2 jCArVA">
                            <div class="InputWrapper__StyledTextFieldWrapper-sc-1dxdzcl-0 hDuiTy RatingSlider__HiddenFormSlider-qmpn39-2 jCArVA">
                                <label for="reputation" class="InputWrapper__StaticLabel-sc-1dxdzcl-2 jAbYuF">Reputation</label>
                                <input type="range" name="reputation" id="reputation" value="0" aria-valuemin="0" aria-valuemax="5" />
                            </div>
                            <div class="FieldWrapper__StyledErrorContainer-sc-1qtyg1n-1 lbqXUp"></div>
                        </div>
                        <div class="RatingSlider__SliderBoxContainer-qmpn39-1 ihdjqt">
                            <div type="QUALITY" aria-selected="false" data-testid="SliderBox" class="RatingSliderBox__StyledRatingSliderBox-skwa8i-0 icOrwZ" id="box1"></div>
                            <div type="QUALITY" aria-selected="false" data-testid="SliderBox" class="RatingSliderBox__StyledRatingSliderBox-skwa8i-0 fAgwqL" id="box2"></div>
                            <div type="QUALITY" aria-selected="false" data-testid="SliderBox" class="RatingSliderBox__StyledRatingSliderBox-skwa8i-0 fAgwqL" id="box3"></div>
                            <div type="QUALITY" aria-selected="false" data-testid="SliderBox" class="RatingSliderBox__StyledRatingSliderBox-skwa8i-0 fAgwqL" id="box4"></div>
                            <div type="QUALITY" aria-selected="false" data-testid="SliderBox" class="RatingSliderBox__StyledRatingSliderBox-skwa8i-0 izVfvf" id="box5"></div>
                        </div>
                        <div class="RatingSliderStatus__SliderStatusContainer-sc-1yt2y2p-0 eXbWmE">
                            <div order="1" width="113px" class="RatingSliderStatus__StyledSliderStatus-sc-1yt2y2p-1 ogdTl">1 - Awful</div>
                            <div order="2" width="278px" class="RatingSliderStatus__StyledSliderStatus-sc-1yt2y2p-1 bbGXHf"></div>
                            <div order="3" width="113px" class="RatingSliderStatus__StyledSliderStatus-sc-1yt2y2p-1 bTRLUV">5 - Awesome</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="FormCard__FormCardContainer-sc-16ra1la-0 kStJld">
            <div data-testid="FORMCARD_TESTID" class="FormCard__StyledFormCard-sc-16ra1la-1 bUsHOg">
                <div class="FormCard__StyledFormCardTitle-sc-16ra1la-2 bNqnap">Location<span>*</span></div>
                <div class="FormCard__StyledFormCardContent-sc-16ra1la-4 jFzfvl">
                    <div class="RatingSlider__StyledRatingSlider-qmpn39-0 cUTwSH">
                        <div class="FieldWrapper__StyledFieldWrapper-sc-1qtyg1n-0 ebCnIf RatingSlider__HiddenFormSlider-qmpn39-2 jCArVA">
                            <div class="InputWrapper__StyledTextFieldWrapper-sc-1dxdzcl-0 hDuiTy RatingSlider__HiddenFormSlider-qmpn39-2 jCArVA">
                                <label for="location" class="InputWrapper__StaticLabel-sc-1dxdzcl-2 jAbYuF">Location</label>
                                <input type="range" name="location" id="location" value="0" aria-valuemin="0" aria-valuemax="5" />
                            </div>
                            <div class="FieldWrapper__StyledErrorContainer-sc-1qtyg1n-1 lbqXUp"></div>
                        </div>
                        <div class="RatingSlider__SliderBoxContainer-qmpn39-1 ihdjqt">
                            <div type="QUALITY" aria-selected="false" data-testid="SliderBox" class="RatingSliderBox__StyledRatingSliderBox-skwa8i-0 icOrwZ"></div>
                            <div type="QUALITY" aria-selected="false" data-testid="SliderBox" class="RatingSliderBox__StyledRatingSliderBox-skwa8i-0 fAgwqL"></div>
                            <div type="QUALITY" aria-selected="false" data-testid="SliderBox" class="RatingSliderBox__StyledRatingSliderBox-skwa8i-0 fAgwqL"></div>
                            <div type="QUALITY" aria-selected="false" data-testid="SliderBox" class="RatingSliderBox__StyledRatingSliderBox-skwa8i-0 fAgwqL"></div>
                            <div type="QUALITY" aria-selected="false" data-testid="SliderBox" class="RatingSliderBox__StyledRatingSliderBox-skwa8i-0 izVfvf"></div>
                        </div>
                        <div class="RatingSliderStatus__SliderStatusContainer-sc-1yt2y2p-0 eXbWmE">
                            <div order="1" width="113px" class="RatingSliderStatus__StyledSliderStatus-sc-1yt2y2p-1 ogdTl">1 - Awful</div>
                            <div order="2" width="278px" class="RatingSliderStatus__StyledSliderStatus-sc-1yt2y2p-1 bbGXHf"></div>
                            <div order="3" width="113px" class="RatingSliderStatus__StyledSliderStatus-sc-1yt2y2p-1 bTRLUV">5 - Awesome</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="FormCard__FormCardContainer-sc-16ra1la-0 kStJld">
            <div data-testid="FORMCARD_TESTID" class="FormCard__StyledFormCard-sc-16ra1la-1 bUsHOg">
                <div class="FormCard__StyledFormCardTitle-sc-16ra1la-2 bNqnap">Opportunities<span>*</span></div>
                <div class="FormCard__StyledFormCardContent-sc-16ra1la-4 jFzfvl">
                    <div class="RatingSlider__StyledRatingSlider-qmpn39-0 cUTwSH">
                        <div class="FieldWrapper__StyledFieldWrapper-sc-1qtyg1n-0 ebCnIf RatingSlider__HiddenFormSlider-qmpn39-2 jCArVA">
                            <div class="InputWrapper__StyledTextFieldWrapper-sc-1dxdzcl-0 hDuiTy RatingSlider__HiddenFormSlider-qmpn39-2 jCArVA">
                                <label for="opportunities" class="InputWrapper__StaticLabel-sc-1dxdzcl-2 jAbYuF">Opportunities</label>
                                <input type="range" name="opportunities" id="opportunities" value="0" aria-valuemin="0" aria-valuemax="5" />
                            </div>
                            <div class="FieldWrapper__StyledErrorContainer-sc-1qtyg1n-1 lbqXUp"></div>
                        </div>
                        <div class="RatingSlider__SliderBoxContainer-qmpn39-1 ihdjqt">
                            <div type="QUALITY" aria-selected="false" data-testid="SliderBox" class="RatingSliderBox__StyledRatingSliderBox-skwa8i-0 icOrwZ"></div>
                            <div type="QUALITY" aria-selected="false" data-testid="SliderBox" class="RatingSliderBox__StyledRatingSliderBox-skwa8i-0 fAgwqL"></div>
                            <div type="QUALITY" aria-selected="false" data-testid="SliderBox" class="RatingSliderBox__StyledRatingSliderBox-skwa8i-0 fAgwqL"></div>
                            <div type="QUALITY" aria-selected="false" data-testid="SliderBox" class="RatingSliderBox__StyledRatingSliderBox-skwa8i-0 fAgwqL"></div>
                            <div type="QUALITY" aria-selected="false" data-testid="SliderBox" class="RatingSliderBox__StyledRatingSliderBox-skwa8i-0 izVfvf"></div>
                        </div>
                        <div class="RatingSliderStatus__SliderStatusContainer-sc-1yt2y2p-0 eXbWmE">
                            <div order="1" width="113px" class="RatingSliderStatus__StyledSliderStatus-sc-1yt2y2p-1 ogdTl">1 - Awful</div>
                            <div order="2" width="278px" class="RatingSliderStatus__StyledSliderStatus-sc-1yt2y2p-1 bbGXHf"></div>
                            <div order="3" width="113px" class="RatingSliderStatus__StyledSliderStatus-sc-1yt2y2p-1 bTRLUV">5 - Awesome</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const containers = document.querySelectorAll('.RatingSlider__SliderBoxContainer-qmpn39-1');
        const colors = ['red', 'blue', 'green', 'purple', 'orange'];

        containers.forEach(container => {
            const boxes = container.querySelectorAll('[data-testid="SliderBox"]');

            boxes.forEach((box, index) => {
                box.addEventListener('mouseenter', () => {
                    if (index === 0) {
                        box.style.backgroundColor = 'yellow';
                    }
                });

                box.addEventListener('mouseleave', () => {
                    if (!box.classList.contains('clicked')) {
                        box.style.backgroundColor = 'gray';
                    }
                });

                box.addEventListener('click', () => {
                    boxes.forEach(b => {
                        b.classList.remove('clicked');
                        b.style.backgroundColor = 'gray';
                    });

                    for (let i = 0; i <= index; i++) {
                        boxes[i].classList.add('clicked');
                        boxes[i].style.backgroundColor = colors[i];
                    }
                });
            });
        });
    });
</script>
@include('frontend.layouts.gym_rating_footer')
