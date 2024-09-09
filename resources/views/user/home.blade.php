<x-layouts.user>

    <h3>Hello</h3>
    <div>
        <button id="scrape-button">Scrape Now</button>
        <div id="result"></div>
        
        <script>
            $(document).ready(function() {
                    $('#scrape-button').click(function() {
                        scrapeData();
                    });
                });

                async function scrapeData() {
                    fetch('http://127.0.0.1:8000/scrape')
                    .then(response => response.json())
                    .then(data => {
                    console.log(data.content);
                    });
                    // try {
                    //     const response = await fetch("https://ph.indeed.com/viewjob?jk=39e59109e671fe78&q=front+end+developer&l=Work+from+Home&tk=1i7amm8l4lr60800&from=ja&advn=3918816685953476&adid=409193014&ad=-6NYlbfkN0CQQqBaQlcAn2GiqR6lBglIS0esshPbe9JnqIpgzl2NdodIWm3MvGxg5WDDtNGqGppsTDg62alqNZg4y8dr3gW7YBDIHN5Ljks4sBuwYj1AJOUAji3R4pq-VCLRaOG_cAHtIGCUJGP6E2saDDg_hvd9udcaXbUengHXCd4I-cJWG8I99rgdzVw4DJ0pmcL190_4IVCO1CJlI4bXVd0U1N-wWyrcxnsPjOm5uK-3Qik0w-zXyrw5u6MZ4MfZXSplbIYsgLHUrHrwBYZAQpu7ypXDMbdmCCBV1WlyuQ_9TeyimgjJdNVIu2URddUJvjF0_1NbwrSBtMVCbaXQVd0fvmUGQJfolmfTWXYd71BZVwpN-8sZZJaD0KZWlEQyvFQTJcNoSy94MbrFMKdXr5mYzLHcDwC4tj8b5PQZF0QJ4AFeQ_Wcbbv_hulI1w7da9Bqql40KKtOEaVN7V6J1lJ67Mbsd7MIqBP1viBq_-N4h3B8QCo3-es7f-KGDGflU1M2tOOS_gjYWNA_UYKReTb9-BiYSGRFpwMLQ41LtMHkTkE0Pg%3D%3D&alid=665018926fb26a51cb783d51&pub=0cace3277f6b99df&camk=H-lBaXMUocLjRPSnSkCshg%3D%3D&xkcb=SoCD6_M38qlWkxBeBD0KbzkdCdPP&xpse=SoDf6_I38qxHzeQh4p0IbzkdCdPP&xfps=f1066cd9-b82e-4939-af8d-be09b171a76d&utm_campaign=job_alerts&utm_medium=email&utm_source=jobseeker_emails");
                    //     const html = await response.text();
                    //     const parser = new DOMParser();
                    //     const doc = parser.parseFromString(html, "text/html");
                    //     const bookTitles = doc.querySelectorAll('h3 a');
                    //     bookTitles.forEach(function(title) {
                    //     const bookTitle = title.textContent;
                    //     console.log(bookTitle);
                    //     storeData(bookTitle);
                    // });
                    // } catch (error) {
                    //     console.log(error);
                    // }
                }
                
                function storeData(data) {
                // code to store data in database or update UI
                }

        </script>
    </div>
</x-layouts.user>