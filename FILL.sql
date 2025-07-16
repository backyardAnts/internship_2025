use lorient_site;
-- Sample Authors
INSERT INTO authors (name, bio, profile_image, email, password)
VALUES 
('Jean Dupont', 'Senior political editor with 15 years of experience.', 'jean.jpg', 'jean@lorient.com', 'hashed_pwd1'),
('Nadine Fayad', 'Reporter focused on culture and society.', 'nadine.jpg', 'nadine@lorient.com', 'hashed_pwd2');

-- Sample Categories
INSERT INTO categories (name, slug, description)
VALUES
('Politics', 'politics', 'Political news and analysis'),
('Culture', 'culture', 'Cultural stories and events'),
('Economy', 'economy', 'Business and economic news'),
('World', 'world', 'International updates');

-- Sample Articles
INSERT INTO articles (title, slug, excerpt, content, thumbnail_url, published_at, category_id, author_id, views, is_featured, is_trending)
VALUES
('New Government Formed Amid Crisis', 'new-government-formed', 'A new Lebanese government has been formed...', 'Full article content goes here...', 'gov.jpg', NOW(), 1, 1, 1240, TRUE, TRUE),
('Beirut Art Week Highlights', 'beirut-art-week', 'Beirut Art Week showcases local talents...', 'Complete report of events...', 'art.jpg', NOW(), 2, 2, 980, FALSE, TRUE),
('Lebanese Pound Hits Record Low', 'lebanese-pound-low', 'The currency drops to its lowest value...', 'Details and expert opinions...', 'pound.jpg', NOW(), 3, 1, 2210, TRUE, FALSE);

-- Sample Users
INSERT INTO users (name, email, password, profile_image, subscription_type, is_admin)
VALUES
('Layal Hachem', 'layal@example.com', 'user_pwd1', NULL, 'free', FALSE),
('Admin User', 'admin@lorient.com', 'admin_pwd', NULL, 'premium', TRUE);