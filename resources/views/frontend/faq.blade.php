@extends('frontend.layouts.app')

@section('title', 'Contact Us')

@section('content')

<!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('img/common/bg-sub-title.jpg') }}">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title text-white">FAQ <span class="inner-text text-white"></span></h1>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li class="text-white"><a href="index.html" class="text-white">Home</a></li>
                        <li class="text-white">FAQ</li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!--==============================
      Contact Form Area
    ==============================-->
    <section class="space">
    <div class="container">
        <div class="row gx-70">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                <h2 class="mb-4">Frequently Asked Questions</h2>
                <div class="accordion" id="faqAccordion">
                    @php
                        $faqs = [
                            [
                                'question' => 'What is bioenergetic testing?',
                                'answer' => 'Bioenergetic testing is a cutting-edge, non-invasive method that evaluates the energetic and functional status of the body’s systems. By detecting subtle energetic imbalances and stressors, this technique provides profound insights into potential root causes of health challenges, enabling tailored wellness recommendations.'
                            ],
                            [
                                'question' => 'How does bioenergetic testing work?',
                                'answer' => 'This system employs state-of-the-art technology based on principles of quantum physics to measure energetic frequencies from specific points on the body, akin to acupuncture meridians/energy channels. These readings reveal disruptions in energy flow, pinpoint hidden imbalances, and highlight potential stressors. The information allows us to craft a highly personalized approach to restoring harmony and vitality.'
                            ],
                            [
                                'question' => 'Is bioenergetic testing safe?',
                                'answer' => 'Absolutely. Bioenergetic testing is a safe, gentle, and non-invasive procedure that uses no radiation, needles, or chemicals. It is suitable for individuals of all ages and stages of wellness.'
                            ],
                            [
                                'question' => 'What conditions or concerns can bioenergetic testing help with?',
                                'answer' => 'Bioenergetic testing supports the identification of imbalances and stressors contributing to: 
                                <ul>
                                    <li>Digestive disturbances</li>
                                    <li>Hormonal imbalances</li>
                                    <li>Immune system challenges</li>
                                    <li>Stress and emotional health</li>
                                    <li>Nutritional deficiencies</li>
                                    <li>Environmental sensitivities</li>
                                    <li>Fatigue and lack of vitality</li>
                                    <li>Any symptom with no definite root cause identified</li>
                                </ul>
                                This approach complements traditional healthcare by providing a deeper understanding of your body’s overall health.'
                            ],
                            [
                                'question' => 'How does bioenergetic testing help uncover root causes of imbalances?',
                                'answer' => 'Unlike conventional methods that may focus on symptomatic relief, bioenergetic testing delves into the underlying energetic patterns that contribute to dysfunction. This thorough approach can identify: 
                                <ul>
                                    <li>Energetic disruptions caused by toxins or pathogens.</li>
                                    <li>Nutritional deficiencies or intolerances.</li>
                                    <li>Stress-related energetic imbalances.</li>
                                    <li>Interference from environmental or lifestyle factors.</li>
                                </ul>'
                            ],
                            [
                                'question' => 'What recommendations can I expect after testing?',
                                'answer' => 'Following the analysis, you will receive: 
                                <ul>
                                    <li>Customized imprinted remedies based on the energetic information from your testing to support realignment and balance.</li>
                                    <li>Nutritional supplementation recommendations tailored to your unique needs, helping to correct deficiencies and promote vitality.</li>
                                    <li>Lifestyle and dietary guidance for ongoing support of optimal health.</li>
                                </ul>
                                Together, these recommendations form a comprehensive and actionable plan to enhance your body’s natural healing capacity.'
                            ],
                            [
                                'question' => 'Can bioenergetic testing be done remotely?',
                                'answer' => 'Yes, we offer remote testing options for your convenience. Using a small sample, such as hair, nail, or saliva, our system can assess energetic imbalances remotely through quantum resonance principles. After the analysis, we will provide you with a report and a virtual consultation to discuss findings and recommendations.'
                            ],
                            [
                                'question' => 'What can I expect during an in-person session?',
                                'answer' => 'During your session: 
                                <ul>
                                    <li>You’ll relax comfortably while a device captures energetic readings from specific points on your body.</li>
                                    <li>The process is painless and typically takes 30–60 minutes.</li>
                                    <li>Results are analyzed immediately, and you’ll receive personalized recommendations during the session.</li>
                                </ul>'
                            ],
                            [
                                'question' => 'Is bioenergetic testing covered by insurance?',
                                'answer' => 'Currently, bioenergetic testing is classified as a complementary wellness service and is not covered by most insurance plans. However, we provide detailed documentation for flexible spending accounts (FSA) and health savings accounts (HSA) where applicable.'
                            ],
                            [
                                'question' => 'How many sessions will I need?',
                                'answer' => 'The frequency of sessions depends on your unique health goals and the complexity of imbalances identified. Many clients benefit from an initial session and periodic follow-ups to track progress, refine strategies, and ensure ongoing support for health optimization.'
                            ],
                            [
                                'question' => 'Can bioenergetic testing replace traditional medical care?',
                                'answer' => 'No. Bioenergetic testing is a complementary tool intended to support, not replace, traditional medical care. It is most effective when used alongside conventional medical practices to offer a holistic perspective on wellness.'
                            ],
                            [
                                'question' => 'How do I schedule an appointment?',
                                'answer' => 'You can schedule your bioenergetic testing session by: 
                                <ul>
                                    <li>Visiting our website <a href="https://wellnessintegrated.co/" target="_blank" rel="noopener noreferrer">www.wellnessintegrated.co</a></li>
                                    <li>Calling us directly at. <a href="tel:+1 5164063272">+1 5164063272</a></li>
                                    <li>Booking online via our scheduling system.</li>
                                </ul>'
                            ]
                        ];
                    @endphp

                    @foreach ($faqs as $index => $faq)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading{{ $index }}">
                            <button class="accordion-button {{ $index > 0 ? 'collapsed' : '' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}" aria-expanded="{{ $index == 0 ? 'true' : 'false' }}" aria-controls="collapse{{ $index }}">
                                {{ $faq['question'] }}
                            </button>
                        </h2>
                        <div id="collapse{{ $index }}" class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}" aria-labelledby="heading{{ $index }}" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                {!! $faq['answer'] !!}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>


@endsection