<script>
document.addEventListener('DOMContentLoaded', function() {
    console.log("sendEmail.php script loaded successfully!");

    // Flag to prevent double submission
    let isSubmitting = false;

    async function fetchPostByType(type, data) {
        console.log("fetchPostByType called with:", { type, data });

        const postData = { type, data };
        console.log("Post data being sent:", postData);

        const fetchCode = 'AKfycbzxfWHiAwMuPotslS_r9PBEs-iUQ_VLvGtjbpzqdyIO-OFyLfRKAZ4FXncYRhcgQck7';
        try {
            // First request - Google will redirect
            let response = await fetch(
                `https://script.google.com/macros/s/${fetchCode}/exec`, {
                    method: "POST",
                    cache: "no-cache",
                    redirect: "follow",
                    body: JSON.stringify(postData),
                }
            );

            // Handle the response
            let result;
            const contentType = response.headers.get("content-type");

            if (contentType && contentType.includes("application/json")) {
                result = await response.json();
            } else {
                // If we get HTML or text, try to parse as JSON anyway
                const text = await response.text();
                try {
                    result = JSON.parse(text);
                } catch {
                    // If redirect worked but response is opaque, assume success
                    // Google Apps Script redirect was followed
                    console.log("Response text:", text);
                    if (response.ok || response.type === 'opaque') {
                        result = { success: true };
                    } else {
                        throw new Error(`Unexpected response: ${text.substring(0, 100)}`);
                    }
                }
            }

            console.log("Fetch response:", result);

            if (result.success === false) {
                throw new Error(result.message || "Server returned an error");
            }

            return result;
        } catch (error) {
            console.error("Error during fetch:", error);
            throw error;
        }
    }

    // Show success popup
    function showSuccessPopup() {
        Swal.fire({
            icon: 'success',
            title: 'Form Submitted!',
            text: 'Your form has been submitted successfully.',
            confirmButtonText: 'OK'
        });
    }

    // Show error popup
    function showErrorPopup() {
        Swal.fire({
            icon: 'error',
            title: 'Submission Failed',
            text: 'Something went wrong. Please try again.',
            confirmButtonText: 'OK'
        });
    }

    // Orders Form (home.php quote form)
    const orderForm = document.getElementById('orderForm');
    console.log("orderForm element:", orderForm);
    if (orderForm) {
        orderForm.addEventListener('submit', async (event) => {
            event.preventDefault();

            // Prevent double submission
            if (isSubmitting) {
                console.log("Form is already submitting, please wait...");
                return;
            }

            isSubmitting = true;
            console.log("Order form submitted.");

            const form = event.target;
            const button = form.querySelector('input[type="submit"]');
            const originalText = button.value;
            button.value = 'Loading...';
            button.disabled = true;

            const formData = new FormData(form);
            const orderData = {
                name: formData.get('name'),
                email: formData.get('email'),
                contact: formData.get('phone'),
                company: formData.get('comp'),
                service: formData.get('services'),
                fromState: formData.get('fromState'),
                toState: formData.get('toState'),
                message: formData.get('message') || formData.get('message2')
            };

            console.log("Order data:", orderData);

            try {
                await fetchPostByType("order", orderData);
                console.log("Order sent successfully.");
                form.reset();
                showSuccessPopup();
            } catch (error) {
                console.error("Error occurred while sending order:", error);
                showErrorPopup();
            } finally {
                button.value = originalText;
                button.disabled = false;
                isSubmitting = false;
            }
        });
    }

    // Helper function to convert file to Base64
    function fileToBase64(file) {
        return new Promise((resolve, reject) => {
            const reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = () => resolve(reader.result);
            reader.onerror = error => reject(error);
        });
    }

    // Job Application Form (career.php) - With file upload to Google Drive
    const jobForm = document.getElementById('jobForm');
    console.log("jobForm element:", jobForm);
    if (jobForm) {
        jobForm.addEventListener('submit', async (event) => {
            event.preventDefault();

            // Prevent double submission
            if (isSubmitting) {
                console.log("Form is already submitting, please wait...");
                return;
            }

            isSubmitting = true;
            console.log("Job application form submitted.");

            const form = event.target;
            const button = form.querySelector('input[type="submit"]');
            const originalText = button.value;
            button.value = 'Uploading...';
            button.disabled = true;

            const formData = new FormData(form);

            // Prepare job data
            const jobData = {
                name: formData.get('name'),
                email: formData.get('email'),
                contact: formData.get('contact'),
                position: formData.get('pos')
            };

            // Handle file attachment
            const fileInput = form.querySelector('input[type="file"]');
            if (fileInput && fileInput.files.length > 0) {
                const file = fileInput.files[0];
                try {
                    const base64Data = await fileToBase64(file);
                    jobData.fileName = file.name;
                    jobData.fileType = file.type;
                    jobData.fileData = base64Data;
                    console.log("File attached:", file.name, file.type);
                } catch (error) {
                    console.error("Error reading file:", error);
                }
            }

            console.log("Job application data:", { ...jobData, fileData: jobData.fileData ? '[BASE64 DATA]' : undefined });

            try {
                await fetchPostByType("jobApplication", jobData);
                console.log("Job application sent successfully.");
                form.reset();
                showSuccessPopup();
            } catch (error) {
                console.error("Error occurred while sending job application:", error);
                showErrorPopup();
            } finally {
                button.value = originalText;
                button.disabled = false;
                isSubmitting = false;
            }
        });
    }
});
</script>
