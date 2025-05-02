@extends($layout)
@section('content')
    <div class="container mx-auto py-10 px-4 md:px-0 mt-[89px]">
        <section class=" p-6">
            <h1 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">Terms of Use</h1>
            <p class="text-gray-700 mb-4">Last updated: May 02, 2025</p>

            <h2 class="text-xl md:text-2xl font-semibold text-gray-900 mt-6 mb-2">1. Acceptance of Terms</h2>
            <p class="text-gray-700 mb-4">By accessing and using this website (the &quot;Service&quot;), you agree to be
                bound by these Terms of Use (&quot;Terms&quot;). If you do not agree to these Terms, please do not use the
                Service.</p>

            <h2 class="text-xl md:text-2xl font-semibold text-gray-900 mt-6 mb-2">2. Description of Service</h2>
            <p class="text-gray-700 mb-4">This website provides information about SKT International School and allows
                users to contact us through contact forms and leave comments through comment forms.</p>

            <h2 class="text-xl md:text-2xl font-semibold text-gray-900 mt-6 mb-2">3. User Conduct</h2>
            <p class="text-gray-700 mb-4">You agree to use the Service only for lawful purposes and in a way that does
                not infringe the rights of, restrict or inhibit anyone else's use and enjoyment of the Service.
                Prohibited behavior includes harassing or causing distress or inconvenience to any other user,
                transmitting obscene or offensive content, or disrupting the normal flow of dialogue within the Service.</p>

            <h2 class="text-xl md:text-2xl font-semibold text-gray-900 mt-6 mb-2">4. Contact Forms</h2>
            <p class="text-gray-700 mb-4">When using our contact forms, you agree to provide accurate and complete
                information. You are solely responsible for the content of your submissions. We reserve the right not to
                respond to submissions that are incomplete, inaccurate, offensive, or irrelevant.</p>

            <h2 class="text-xl md:text-2xl font-semibold text-gray-900 mt-6 mb-2">5. Comment Forms</h2>
            <p class="text-gray-700 mb-4">Our comment forms allow users to share their thoughts and opinions. By
                posting comments, you agree that you are solely responsible for the content of your comments. You agree
                not to post comments that are unlawful, defamatory, hateful, harassing, or otherwise objectionable. We
                reserve the right to moderate, edit, or remove any comments that violate these Terms or that we deem
                inappropriate.</p>

            <h2 class="text-xl md:text-2xl font-semibold text-gray-900 mt-6 mb-2">6. Intellectual Property</h2>
            <p class="text-gray-700 mb-4">The content, design, and logos of this website are owned by or licensed to
                us and are protected by copyright and other intellectual property laws. You may not reproduce, modify,
                distribute, or display any part of the Service without our prior written consent.</p>

            <h2 class="text-xl md:text-2xl font-semibold text-gray-900 mt-6 mb-2">7. Disclaimer of Warranties</h2>
            <p class="text-gray-700 mb-4">The Service is provided on an &quot;as is&quot; and &quot;as available&quot; basis
                without any warranties of any kind, express or implied, including but not limited to warranties of
                merchantability, fitness for a particular purpose, or non-infringement. We do not warrant that the Service
                will be uninterrupted or error-free.</p>

            <h2 class="text-xl md:text-2xl font-semibold text-gray-900 mt-6 mb-2">8. Limitation of Liability</h2>
            <p class="text-gray-700 mb-4">To the maximum extent permitted by law, we shall not be liable for any indirect,
                incidental, special, consequential or punitive damages, or any loss of profits or revenues, whether
                incurred directly or indirectly, resulting from your use of the Service.</p>

            <h2 class="text-xl md:text-2xl font-semibold text-gray-900 mt-6 mb-2">9. Indemnification</h2>
            <p class="text-gray-700 mb-4">You agree to indemnify and hold us harmless from any claims, damages, losses,
                liabilities, and expenses (including attorneys' fees) arising out of or related to your use of the
                Service, your violation of these Terms, or your violation of any rights of a third party.</p>

            <h2 class="text-xl md:text-2xl font-semibold text-gray-900 mt-6 mb-2">10. Modifications to Terms</h2>
            <p class="text-gray-700 mb-4">We reserve the right to modify these Terms at any time without prior notice.
                Your continued use of the Service after any such changes constitutes your acceptance of the new Terms. It
                is your responsibility to review these Terms periodically for any updates or changes.</p>

            <h2 class="text-xl md:text-2xl font-semibold text-gray-900 mt-6 mb-2">11. Governing Law</h2>
            <p class="text-gray-700 mb-4">These Terms shall be governed by and construed in accordance with the laws of
                Myanmar (Burma), without regard to its conflict of law provisions.</p>

            <h2 class="text-xl md:text-2xl font-semibold text-gray-900 mt-6 mb-2">12. Contact Us</h2>
            <p class="text-gray-700 mb-4">If you have any questions about these Terms of Use, please contact us:</p>
            <ul class="list-disc list-inside text-gray-700 space-y-2">
                <li>By visiting this page on our website: <a class="text-blue-600"
                        href="https://skt.edu.mm/contact_us/contact_us/{{ $branch->branch_short_name }}"
                        rel="external nofollow noopener"
                        target="_blank">https://skt.edu.mm/contact_us/contact_us/{{ $branch->branch_short_name }}</a>
                </li>
            </ul>
        </section>
    </div>
@endsection
