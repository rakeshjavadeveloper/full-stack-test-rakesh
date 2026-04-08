<!DOCTYPE html>
<html>

<head>
    <title>CRUD</title>

    <!-- jQuery (required for DataTables) -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <title>DelphianLogic in Action</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet" />
    <!-- DataTables CSS + JS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="../assets/style/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <div class="section-header">
        <h2>DelphianLogic in Action</h2>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo</p>
    </div>

    <!-- ════════════════════════════════════
        DESKTOP
    ════════════════════════════════════ -->
    <div class="desktop-section">
        <div class="desktop-wrapper">

            <div class="tab-list">
                <button class="tab-item active" onclick="switchTab(0)" data-image="../assets/files/images/DL-Learning-1.jpg">
                    <div class="tab-icon">
                        <img src="../assets/files/images/DL-learning.svg" alt="">
                    </div>
                    <span class="tab-label">Learning</span>
                </button>
                <button class="tab-item" onclick="switchTab(1)" data-image="../assets/files/images/DL-technology.jpg">
                    <div class="tab-icon">
                        <img src="../assets/files/images/DL-technology.svg" alt="">
                    </div>
                    <span class="tab-label">Technology</span>
                </button>
                <button class="tab-item" onclick="switchTab(2)" data-image="../assets/files/images/DL-communication.jpg">
                    <div class="tab-icon">
                        <img src="../assets/files/images/DL-communication.svg" alt="">
                    </div>
                    <span class="tab-label">Communication</span>
                </button>
            </div>

            <div class="carousel-panel">

                <!-- TAB 0 carousel -->
                <div class="tab-carousel active" id="tc-0">
                    <div class="inner-slide active">
                        <div class="slide-bg"></div>
                        <div class="slide-overlay" style="background:rgba(75,191,204,0.92);"></div>
                        <div class="slide-content">
                            <span class="slide-tag">Digital Learning Infrastructure</span>
                            <h3 class="slide-title">Usability enhancement and Training for Transaction Portal for Customers</h3>
                            <a href="#" class="slide-link">Learn More &nbsp;→</a>
                            <div class="carousel-dots">
                                <button class="dot active" onclick="deskSlide(0,0)"></button>
                                <button class="dot" onclick="deskSlide(0,1)"></button>
                                <button class="dot" onclick="deskSlide(0,2)"></button>
                            </div>
                        </div>
                    </div>
                    <div class="inner-slide">
                        <div class="slide-bg" ></div>
                        <div class="slide-overlay" style="background:rgba(42,145,165,0.93);"></div>
                        <div class="slide-content">
                            <span class="slide-tag">E-Learning Platforms</span>
                            <h3 class="slide-title">Custom LMS Development and Content Migration for Global Enterprises</h3>
                            <a href="#" class="slide-link">Learn More &nbsp;→</a>
                            <div class="carousel-dots">
                                <button class="dot" onclick="deskSlide(0,0)"></button>
                                <button class="dot active" onclick="deskSlide(0,1)"></button>
                                <button class="dot" onclick="deskSlide(0,2)"></button>
                            </div>
                        </div>
                    </div>
                    <div class="inner-slide">
                        <div class="slide-bg" ></div>
                        <div class="slide-overlay" style="background:rgba(30,110,140,0.93);"></div>
                        <div class="slide-content">
                            <span class="slide-tag">Training Programs</span>
                            <h3 class="slide-title">Blended Learning Strategy and Instructor-led Training Rollout</h3>
                            <a href="#" class="slide-link">Learn More &nbsp;→</a>
                            <div class="carousel-dots">
                                <button class="dot" onclick="deskSlide(0,0)"></button>
                                <button class="dot" onclick="deskSlide(0,1)"></button>
                                <button class="dot active" onclick="deskSlide(0,2)"></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TAB 1 carousel -->
                <div class="tab-carousel" id="tc-1">
                    <div class="inner-slide active">
                        <div class="slide-bg" ></div>
                        <div class="slide-overlay" style="background:rgba(75,191,204,0.92);"></div>
                        <div class="slide-content">
                            <span class="slide-tag">Technology Solutions</span>
                            <h3 class="slide-title">Intelligent Systems Integration and Cloud Infrastructure Modernization</h3>
                            <a href="#" class="slide-link">Learn More &nbsp;→</a>
                            <div class="carousel-dots">
                                <button class="dot active" onclick="deskSlide(1,0)"></button>
                                <button class="dot" onclick="deskSlide(1,1)"></button>
                                <button class="dot" onclick="deskSlide(1,2)"></button>
                            </div>
                        </div>
                    </div>
                    <div class="inner-slide">
                        <div class="slide-bg" ></div>
                        <div class="slide-overlay" style="background:rgba(42,145,165,0.93);"></div>
                        <div class="slide-content">
                            <span class="slide-tag">API & Integration</span>
                            <h3 class="slide-title">Microservices Architecture Design for Scalable Enterprise Applications</h3>
                            <a href="#" class="slide-link">Learn More &nbsp;→</a>
                            <div class="carousel-dots">
                                <button class="dot" onclick="deskSlide(1,0)"></button>
                                <button class="dot active" onclick="deskSlide(1,1)"></button>
                                <button class="dot" onclick="deskSlide(1,2)"></button>
                            </div>
                        </div>
                    </div>
                    <div class="inner-slide">
                        <div class="slide-bg" ></div>
                        <div class="slide-overlay" style="background:rgba(30,110,140,0.93);"></div>
                        <div class="slide-content">
                            <span class="slide-tag">DevOps & Automation</span>
                            <h3 class="slide-title">CI/CD Pipeline Optimization and Automated Testing Frameworks</h3>
                            <a href="#" class="slide-link">Learn More &nbsp;→</a>
                            <div class="carousel-dots">
                                <button class="dot" onclick="deskSlide(1,0)"></button>
                                <button class="dot" onclick="deskSlide(1,1)"></button>
                                <button class="dot active" onclick="deskSlide(1,2)"></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TAB 2 carousel -->
                <div class="tab-carousel" id="tc-2">
                    <div class="inner-slide active">
                        <div class="slide-bg" ></div>
                        <div class="slide-overlay" style="background:rgba(75,191,204,0.92);"></div>
                        <div class="slide-content">
                            <span class="slide-tag">Strategic Communication</span>
                            <h3 class="slide-title">Enterprise Communication Frameworks for Distributed Teams and Stakeholders</h3>
                            <a href="#" class="slide-link">Learn More &nbsp;→</a>
                            <div class="carousel-dots">
                                <button class="dot active" onclick="deskSlide(2,0)"></button>
                                <button class="dot" onclick="deskSlide(2,1)"></button>
                                <button class="dot" onclick="deskSlide(2,2)"></button>
                            </div>
                        </div>
                    </div>
                    <div class="inner-slide">
                        <div class="slide-bg" ></div>
                        <div class="slide-overlay" style="background:rgba(42,145,165,0.93);"></div>
                        <div class="slide-content">
                            <span class="slide-tag">Internal Comms</span>
                            <h3 class="slide-title">Digital Workplace Transformation Through Unified Communication Tools</h3>
                            <a href="#" class="slide-link">Learn More &nbsp;→</a>
                            <div class="carousel-dots">
                                <button class="dot" onclick="deskSlide(2,0)"></button>
                                <button class="dot active" onclick="deskSlide(2,1)"></button>
                                <button class="dot" onclick="deskSlide(2,2)"></button>
                            </div>
                        </div>
                    </div>
                    <div class="inner-slide">
                        <div class="slide-bg" ></div>
                        <div class="slide-overlay" style="background:rgba(30,110,140,0.93);"></div>
                        <div class="slide-content">
                            <span class="slide-tag">Stakeholder Engagement</span>
                            <h3 class="slide-title">Customer Portal Redesign and Multi-Channel Engagement Strategy</h3>
                            <a href="#" class="slide-link">Learn More &nbsp;→</a>
                            <div class="carousel-dots">
                                <button class="dot" onclick="deskSlide(2,0)"></button>
                                <button class="dot" onclick="deskSlide(2,1)"></button>
                                <button class="dot active" onclick="deskSlide(2,2)"></button>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- /carousel-panel -->

            <div class="image-panel">
                <img id="tabImage" src="../assets/files/images/DL-Learning-1.jpg" alt="Case Study" />
            </div>

        </div>
    </div>

    <!-- ════════════════════════════════════
        MOBILE
    ════════════════════════════════════ -->
    <div class="mobile-section">

        <!-- ACC 0: Learning -->
        <div class="accordion-item-custom">
            <button class="acc-header open" onclick="toggleAcc(0)">
                <div class="acc-icon"><img src="../assets/files/images/DL-learning.svg" alt=""></div>
                <span class="acc-label">Learning</span>
                <div class="acc-toggle" id="toggle-0">−</div>
            </button>
            <div class="acc-arrow show" id="arrow-0" style="border-bottom:14px solid #4bbfcc;"></div>
            <div class="acc-body open" id="accBody-0">
                <div id="mc-0">
                    <div class="mob-inner-slide active" style="background:#4bbfcc;">
                        <span class="slide-tag">Digital Learning Infrastructure</span>
                        <h3 class="slide-title">Usability enhancement and Training for Transaction Portal for Customers</h3>
                        <a href="#" class="slide-link">Learn More &nbsp;→</a>
                        <div class="carousel-dots" style="margin-top:24px;">
                            <button class="dot active" onclick="mobSlide(0,0)"></button>
                            <button class="dot" onclick="mobSlide(0,1)"></button>
                            <button class="dot" onclick="mobSlide(0,2)"></button>
                        </div>
                    </div>
                    <div class="mob-inner-slide" style="background:#2a91a5;">
                        <span class="slide-tag">E-Learning Platforms</span>
                        <h3 class="slide-title">Custom LMS Development and Content Migration for Global Enterprises</h3>
                        <a href="#" class="slide-link">Learn More &nbsp;→</a>
                        <div class="carousel-dots" style="margin-top:24px;">
                            <button class="dot" onclick="mobSlide(0,0)"></button>
                            <button class="dot active" onclick="mobSlide(0,1)"></button>
                            <button class="dot" onclick="mobSlide(0,2)"></button>
                        </div>
                    </div>
                    <div class="mob-inner-slide" style="background:#1e6e8c;">
                        <span class="slide-tag">Training Programs</span>
                        <h3 class="slide-title">Blended Learning Strategy and Instructor-led Training Rollout</h3>
                        <a href="#" class="slide-link">Learn More &nbsp;→</a>
                        <div class="carousel-dots" style="margin-top:24px;">
                            <button class="dot" onclick="mobSlide(0,0)"></button>
                            <button class="dot" onclick="mobSlide(0,1)"></button>
                            <button class="dot active" onclick="mobSlide(0,2)"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ACC 1: Technology -->
        <div class="accordion-item-custom" style="margin-top:4px;">
            <button class="acc-header" onclick="toggleAcc(1)">
                <div class="acc-icon"><img src="../assets/files/images/DL-technology.svg" alt=""></div>
                <span class="acc-label">Technology</span>
                <div class="acc-toggle" id="toggle-1">+</div>
            </button>
            <div class="acc-arrow" id="arrow-1" style="border-bottom:14px solid #4bbfcc;"></div>
            <div class="acc-body" id="accBody-1">
                <div id="mc-1">
                    <div class="mob-inner-slide active" style="background:#4bbfcc;">
                        <span class="slide-tag">Technology Solutions</span>
                        <h3 class="slide-title">Intelligent Systems Integration and Cloud Infrastructure Modernization</h3>
                        <a href="#" class="slide-link">Learn More &nbsp;→</a>
                        <div class="carousel-dots" style="margin-top:24px;">
                            <button class="dot active" onclick="mobSlide(1,0)"></button>
                            <button class="dot" onclick="mobSlide(1,1)"></button>
                            <button class="dot" onclick="mobSlide(1,2)"></button>
                        </div>
                    </div>
                    <div class="mob-inner-slide" style="background:#2a91a5;">
                        <span class="slide-tag">API & Integration</span>
                        <h3 class="slide-title">Microservices Architecture Design for Scalable Enterprise Applications</h3>
                        <a href="#" class="slide-link">Learn More &nbsp;→</a>
                        <div class="carousel-dots" style="margin-top:24px;">
                            <button class="dot" onclick="mobSlide(1,0)"></button>
                            <button class="dot active" onclick="mobSlide(1,1)"></button>
                            <button class="dot" onclick="mobSlide(1,2)"></button>
                        </div>
                    </div>
                    <div class="mob-inner-slide" style="background:#1e6e8c;">
                        <span class="slide-tag">DevOps & Automation</span>
                        <h3 class="slide-title">CI/CD Pipeline Optimization and Automated Testing Frameworks</h3>
                        <a href="#" class="slide-link">Learn More &nbsp;→</a>
                        <div class="carousel-dots" style="margin-top:24px;">
                            <button class="dot" onclick="mobSlide(1,0)"></button>
                            <button class="dot" onclick="mobSlide(1,1)"></button>
                            <button class="dot active" onclick="mobSlide(1,2)"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ACC 2: Communication -->
        <div class="accordion-item-custom" style="margin-top:4px;">
            <button class="acc-header" onclick="toggleAcc(2)">
                <div class="acc-icon"><img src="../assets/files/images/DL-communication.svg" alt=""></div>
                <span class="acc-label">Communication</span>
                <div class="acc-toggle" id="toggle-2">+</div>
            </button>
            <div class="acc-arrow" id="arrow-2" style="border-bottom:14px solid #4bbfcc;"></div>
            <div class="acc-body" id="accBody-2">
                <div id="mc-2">
                    <div class="mob-inner-slide active" style="background:#4bbfcc;">
                        <span class="slide-tag">Strategic Communication</span>
                        <h3 class="slide-title">Enterprise Communication Frameworks for Distributed Teams and Stakeholders</h3>
                        <a href="#" class="slide-link">Learn More &nbsp;→</a>
                        <div class="carousel-dots" style="margin-top:24px;">
                            <button class="dot active" onclick="mobSlide(2,0)"></button>
                            <button class="dot" onclick="mobSlide(2,1)"></button>
                            <button class="dot" onclick="mobSlide(2,2)"></button>
                        </div>
                    </div>
                    <div class="mob-inner-slide" style="background:#2a91a5;">
                        <span class="slide-tag">Internal Comms</span>
                        <h3 class="slide-title">Digital Workplace Transformation Through Unified Communication Tools</h3>
                        <a href="#" class="slide-link">Learn More &nbsp;→</a>
                        <div class="carousel-dots" style="margin-top:24px;">
                            <button class="dot" onclick="mobSlide(2,0)"></button>
                            <button class="dot active" onclick="mobSlide(2,1)"></button>
                            <button class="dot" onclick="mobSlide(2,2)"></button>
                        </div>
                    </div>
                    <div class="mob-inner-slide" style="background:#1e6e8c;">
                        <span class="slide-tag">Stakeholder Engagement</span>
                        <h3 class="slide-title">Customer Portal Redesign and Multi-Channel Engagement Strategy</h3>
                        <a href="#" class="slide-link">Learn More &nbsp;→</a>
                        <div class="carousel-dots" style="margin-top:24px;">
                            <button class="dot" onclick="mobSlide(2,0)"></button>
                            <button class="dot" onclick="mobSlide(2,1)"></button>
                            <button class="dot active" onclick="mobSlide(2,2)"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="data-section">
        <form id="userForm">
            <input type="hidden" id="userId">
            <input type="text" id="name" placeholder="Name" required>
            <input type="email" id="email" placeholder="Email" required>
            <button type="submit">Save</button>
        </form>
        <br>
    
        <table id="userTable" class="display">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
        <!-- Update Modal -->
        <div id="editModal" >
            <h3>Edit User</h3>
            <input type="hidden" id="editId">
            <input type="text" id="editName" placeholder="Name"><br><br>
            <input type="email" id="editEmail" placeholder="Email"><br><br>
            <div class="actionpoup">
                <button onclick="updateUser()">Update</button>
                <button onclick="closeModal()">Cancel</button>
            </div>
        </div>
    </div>

    
    <script src="../assets/js/app.js"></script>

</body>

</html>