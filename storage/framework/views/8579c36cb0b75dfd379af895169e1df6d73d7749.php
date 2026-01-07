<?php $__env->startSection('title', 'Events Dashboard'); ?>
<?php $__env->startSection('content'); ?>
<!-- Alpine.js Component for Signal Subscriptions -->

<style>
.events-section {
  border-radius: 16px;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
  padding: 24px;
  margin-right: 20px;
  margin-bottom: 20px;
  transition: all 0.3s ease;
  border: 1px solid #e2e8f0;
  background-color: inherit; /* Inherit parent background */
}

.events-section:hover {
  box-shadow: 0 6px 25px rgba(0, 0, 0, 0.12);
}

.section-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 28px;
  padding-bottom: 16px;
  border-bottom: 2px solid rgba(241, 245, 249, 0.5);
}

.section-title {
  font-size: 1.5rem;
  font-weight: 600;
  color: #1e293b;
  margin: 0;
}

.view-all-btn {
  padding: 8px 20px;
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  color: white;
  border: none;
  border-radius: 8px;
  font-weight: 500;
  cursor: pointer;
  transition: all 0.3s ease;
  font-size: 0.95rem;
}

.view-all-btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
}

/* Events Grid - Mobile First (1 column) */
.events-grid {
  display: grid;
  gap: 20px;
  grid-template-columns: 1fr;
}

/* Event Card */
.event-card {
  border-radius: 12px;
  padding: 20px;
  border: 1px solid rgba(226, 232, 240, 0.5);
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  display: flex;
  flex-direction: column;
  height: 100%;
  position: relative;
  overflow: hidden;
  background-color: inherit; /* Inherit background */
}

.event-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 4px;
  height: 100%;
  background: linear-gradient(to bottom, #667eea, #764ba2);
  opacity: 0;
  transition: opacity 0.3s ease;
}

.event-card:hover {
  transform: translateY(-4px);
  box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
  border-color: #c7d2fe;
}

.event-card:hover::before {
  opacity: 1;
}

.event-header {
  margin-bottom: 16px;
  display: flex;
  flex-direction: column;
  gap: 8px;
}

.event-type {
  display: inline-block;
  padding: 4px 12px;
  background: rgba(224, 231, 255, 0.3);
  color: #4f46e5;
  border-radius: 20px;
  font-size: 0.8rem;
  font-weight: 600;
  align-self: flex-start;
  border: 1px solid rgba(79, 70, 229, 0.2);
}

.event-title {
  font-size: 1.2rem;
  font-weight: 600;
  color: #1e293b;
  margin: 0;
  line-height: 1.4;
}

/* YouTube Video Preview */
.youtube-preview {
  width: 100%;
  margin-bottom: 16px;
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  position: relative;
}

.youtube-preview iframe {
  width: 100%;
  height: 200px;
  border: none;
  display: block;
}

.youtube-placeholder {
  width: 100%;
  height: 200px;
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.3s ease;
}

.youtube-placeholder:hover {
  opacity: 0.9;
}

.youtube-placeholder .play-icon {
  font-size: 3rem;
  margin-bottom: 10px;
}

.youtube-placeholder span {
  font-size: 1rem;
}

.event-details {
  flex: 1;
}

.event-meta {
  display: flex;
  flex-wrap: wrap;
  gap: 16px;
  margin-bottom: 16px;
  padding: 12px 0;
  border-bottom: 1px solid rgba(241, 245, 249, 0.5);
}

.event-date, .event-time {
  display: flex;
  align-items: center;
  gap: 6px;
  font-size: 0.9rem;
  color: #64748b;
}

.event-description {
  color: #475569;
  font-size: 0.95rem;
  line-height: 1.5;
  margin-bottom: 20px;
}

.event-action {
  padding: 10px 20px;
  background: rgba(241, 245, 249, 0.5);
  color: #475569;
  border: 1px solid rgba(226, 232, 240, 0.5);
  border-radius: 8px;
  font-weight: 500;
  cursor: pointer;
  transition: all 0.3s ease;
  align-self: flex-start;
  margin-top: auto;
}

.event-action:hover {
  background: rgba(226, 232, 240, 0.8);
  color: #1e293b;
  transform: translateX(4px);
  border-color: #c7d2fe;
}

/* Video Modal */
.video-modal {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.9);
  z-index: 1000;
  align-items: center;
  justify-content: center;
}

.video-modal.active {
  display: flex;
}

.video-modal-content {
  width: 90%;
  max-width: 900px;
  position: relative;
}

.video-modal iframe {
  width: 100%;
  height: 500px;
  border: none;
  border-radius: 12px;
}

.close-modal {
  position: absolute;
  top: -40px;
  right: 0;
  background: none;
  border: none;
  color: white;
  font-size: 2rem;
  cursor: pointer;
  padding: 5px 15px;
}

.close-modal:hover {
  color: #667eea;
}

/* Tablet (min-width: 768px) */
@media (min-width: 768px) {
  .events-section {
    padding: 28px;
    margin-right: 24px;
  }
  
  .events-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 24px;
  }
  
  .section-title {
    font-size: 1.625rem;
  }
  
  .youtube-preview iframe,
  .youtube-placeholder {
    height: 180px;
  }
}

/* Laptop (min-width: 1024px) */
@media (min-width: 1024px) {
  .events-section {
    padding: 32px;
    margin-right: 32px;
  }
  
  .events-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 28px;
  }
  
  .section-title {
    font-size: 1.75rem;
  }
  
  .event-card {
    padding: 24px;
  }
  
  .youtube-preview iframe,
  .youtube-placeholder {
    height: 200px;
  }
  
  .video-modal iframe {
    height: 550px;
  }
}

/* Large Screens (min-width: 1280px) */
@media (min-width: 1280px) {
  .events-section {
    margin-right: 40px;
    padding: 40px;
  }
  
  .events-grid {
    gap: 32px;
  }
  
  .section-title {
    font-size: 1.875rem;
  }
  
  .youtube-preview iframe,
  .youtube-placeholder {
    height: 220px;
  }
  
  .video-modal iframe {
    height: 600px;
  }
}

/* Small mobile screens (max-width: 375px) */
@media (max-width: 375px) {
  .events-section {
    padding: 16px;
    margin-right: 8px;
  }
  
  .section-header {
    flex-direction: column;
    gap: 12px;
    align-items: flex-start;
  }
  
  .event-meta {
    flex-direction: column;
    gap: 8px;
  }
  
  .youtube-preview iframe,
  .youtube-placeholder {
    height: 160px;
  }
}

/* Add this to your existing CSS */
.events-section,
.events-section *:not(.youtube-preview iframe):not(.youtube-preview) {
  color: white !important;
}

/* Specific element overrides for better visibility */
.section-title,
.event-title {
  color: white !important;
}

.event-type {
  color: rgba(255, 255, 255, 0.9) !important;
  background: rgba(255, 255, 255, 0.1) !important;
  border-color: rgba(255, 255, 255, 0.2) !important;
}

.event-date,
.event-time,
.event-description {
  color: rgba(255, 255, 255, 0.8) !important;
}

.event-action {
  color: white !important;
  background: rgba(255, 255, 255, 0.1) !important;
  border-color: rgba(255, 255, 255, 0.2) !important;
}

.event-action:hover {
  background: rgba(255, 255, 255, 0.2) !important;
  color: white !important;
  border-color: rgba(255, 255, 255, 0.3) !important;
}

/* Update the event card border for better visibility on dark background */
.event-card {
  border-color: rgba(255, 255, 255, 0.1) !important;
  background: rgba(255, 255, 255, 0.03) !important;
}

.event-card:hover {
  border-color: rgba(255, 255, 255, 0.2) !important;
  background: rgba(255, 255, 255, 0.05) !important;
}

/* Update section header border */
.section-header {
  border-bottom-color: rgba(255, 255, 255, 0.1) !important;
}

/* Update event meta border */
.event-meta {
  border-bottom-color: rgba(255, 255, 255, 0.1) !important;
}

/* Update view all button for dark background */
.view-all-btn {
  background: linear-gradient(135deg, rgba(102, 126, 234, 0.9) 0%, rgba(118, 75, 162, 0.9) 100%) !important;
  color: white !important;
}

.view-all-btn:hover {
  background: linear-gradient(135deg, rgba(102, 126, 234, 1) 0%, rgba(118, 75, 162, 1) 100%) !important;
  box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3) !important;
}

/* Update the colored left border on hover */
.event-card::before {
  background: linear-gradient(to bottom, rgba(102, 126, 234, 0.8), rgba(118, 75, 162, 0.8)) !important;
}
</style>

<div class="events-section">
  <div class="section-header">
    <h2 class="section-title">📅 Workshop & Upcoming Events</h2>
    <!--<button class="view-all-btn">View All Events →</button> -->
  </div>
  
  <div class="events-grid">
    <!-- Event 1 with YouTube Preview -->
    <div class="event-card">
      <div class="event-header">
        <span class="event-type">Team Meeting</span>
        <h3 class="event-title">Q4 Planning Session</h3>
      </div>
      
      <div class="youtube-preview" onclick="openVideoModal('8mmMUdrTyn4', 'Q4 Planning Session Preview')">
        <!-- YouTube Embed - Replace with actual video ID -->
        <iframe 
          src="https://www.youtube.com/embed/8mmMUdrTyn4?rel=0&amp;controls=1&amp;showinfo=0&amp;modestbranding=1" 
          frameborder="0" 
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
          allowfullscreen>
        </iframe>
      </div>
      
      <div class="event-details">
        <div class="event-meta">
          <span class="event-date">📅 Oct 15, 2024</span>
          <span class="event-time">⏰ 10:00 AM - 11:30 AM</span>
        </div>
        <p class="event-description">Quarterly planning meeting to discuss Q4 objectives, team goals, and project roadmap.</p>
      </div>
      <button class="event-action" onclick="openEventDetails(1)">View Details</button>
    </div>
    
    <!-- Event 2 with YouTube Preview -->
    <div class="event-card">
      <div class="event-header">
        <span class="event-type">Product Launch</span>
        <h3 class="event-title">Feature Release v2.5</h3>
      </div>
      
      <div class="youtube-preview" onclick="openVideoModal('SrByGM8kg6E', 'Feature Release v2.5 Preview')">
        <!-- YouTube Embed - Replace with actual video ID -->
        <iframe 
          src="https://www.youtube.com/embed/SrByGM8kg6E?rel=0&amp;controls=1&amp;showinfo=0&amp;modestbranding=1" 
          frameborder="0" 
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
          allowfullscreen>
        </iframe>
      </div>
      
      <div class="event-details">
        <div class="event-meta">
          <span class="event-date">📅 Oct 18, 2024</span>
          <span class="event-time">⏰ 2:00 PM - 4:00 PM</span>
        </div>
        <p class="event-description">Launch event for new product features including AI integration and enhanced analytics.</p>
      </div>
      <button class="event-action" onclick="openEventDetails(2)">View Details</button>
    </div>
    
    <!-- Event 3 with YouTube Preview -->
    <div class="event-card">
      <div class="event-header">
        <span class="event-type">Workshop</span>
        <h3 class="event-title">React Best Practices</h3>
      </div>
      
      <div class="youtube-preview" onclick="openVideoModal('DtZyag828Yw', 'React Best Practices Preview')">
        <!-- YouTube Embed - Replace with actual video ID -->
        <iframe 
          src="https://www.youtube.com/embed/DtZyag828Yw?rel=0&amp;controls=1&amp;showinfo=0&amp;modestbranding=1" 
          frameborder="0" 
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
          allowfullscreen>
        </iframe>
      </div>
      
      <div class="event-details">
        <div class="event-meta">
          <span class="event-date">📅 Oct 20, 2024</span>
          <span class="event-time">⏰ 9:00 AM - 12:00 PM</span>
        </div>
        <p class="event-description">Advanced React patterns and best practices workshop for senior developers.</p>
      </div>
      <button class="event-action" onclick="openEventDetails(3)">View Details</button>
    </div>
    
    <!-- Event 4 with YouTube Preview -->
    <div class="event-card">
      <div class="event-header">
        <span class="event-type">Conference</span>
        <h3 class="event-title">Tech Innovation Summit</h3>
      </div>
      
      <div class="youtube-preview" onclick="openVideoModal('CGgyyTTv0yw', 'Tech Innovation Summit Preview')">
        <!-- YouTube Embed - Replace with actual video ID -->
        <iframe 
          src="https://www.youtube.com/embed/CGgyyTTv0yw?rel=0&amp;controls=1&amp;showinfo=0&amp;modestbranding=1" 
          frameborder="0" 
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
          allowfullscreen>
        </iframe>
      </div>
      
      <div class="event-details">
        <div class="event-meta">
          <span class="event-date">📅 Oct 25, 2024</span>
          <span class="event-time">⏰ 8:00 AM - 5:00 PM</span>
        </div>
        <p class="event-description">Annual technology conference featuring keynote speakers and networking opportunities.</p>
      </div>
      <button class="event-action" onclick="openEventDetails(4)">View Details</button>
    </div>
  </div>
</div>

<!-- Video Modal -->
<div id="videoModal" class="video-modal">
  <div class="video-modal-content">
    <button class="close-modal" onclick="closeVideoModal()">×</button>
    <iframe id="modalVideo" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
</div>

<script>
// Video Modal Functions
let currentVideoTitle = '';

function openVideoModal(videoId, title) {
  const modal = document.getElementById('videoModal');
  const iframe = document.getElementById('modalVideo');
  
  // Set video source with autoplay
  iframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0&modestbranding=1`;
  currentVideoTitle = title;
  
  // Show modal
  modal.classList.add('active');
  document.body.style.overflow = 'hidden';
}

function closeVideoModal() {
  const modal = document.getElementById('videoModal');
  const iframe = document.getElementById('modalVideo');
  
  // Stop video
  iframe.src = '';
  
  // Hide modal
  modal.classList.remove('active');
  document.body.style.overflow = 'auto';
}

// Close modal when clicking outside the video
document.getElementById('videoModal').addEventListener('click', function(e) {
  if (e.target === this) {
    closeVideoModal();
  }
});

// Event details function
function openEventDetails(eventId) {
  alert(`Opening details for event ${eventId}. In a real app, this would navigate to the event detail page.`);
  // Example: window.location.href = `/events/${eventId}`;
}

// Optional: Add this JavaScript for additional interactivity
document.addEventListener('DOMContentLoaded', function() {
  const viewAllBtn = document.querySelector('.view-all-btn');
  if (viewAllBtn) {
    viewAllBtn.addEventListener('click', function() {
      // Add your navigation logic here
      window.location.href = '/events'; // Example URL
    });
  }
  
  // Add click event to YouTube previews
  const youtubePreviews = document.querySelectorAll('.youtube-preview');
  youtubePreviews.forEach(preview => {
    preview.style.cursor = 'pointer';
  });
  
  // Add keyboard support for modal
  document.addEventListener('keydown', function(e) {
    const modal = document.getElementById('videoModal');
    if (modal.classList.contains('active')) {
      if (e.key === 'Escape') {
        closeVideoModal();
      }
    }
  });
});
</script>

<!-- Alpine.js Script -->
<script>
function signalManager() {
    return {
        showModal: false,
        selectedSignal: {
            id: '',
            name: '',
            price: ''
        },

        openSubscriptionModal(id, name, price) {
            this.selectedSignal = { id, name, price };
            this.showModal = true;
            document.body.style.overflow = 'hidden';
        },

        closeModal() {
            this.showModal = false;
            document.body.style.overflow = 'auto';
        }
    }
}

// Initialize Lucide icons when page loads
document.addEventListener('DOMContentLoaded', function() {
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }
});
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dasht', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u935933003/domains/stagingmemebull.randsender.space/public_html/resources/views/user/signal.blade.php ENDPATH**/ ?>