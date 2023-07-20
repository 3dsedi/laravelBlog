# LaravelBlog
## Blog App

**Description**
- Blog App is a simple full-stack application created during my free time to enhance my skills in PHP and Laravel
development.
- The project serves as a platform where users can create profiles, write and publish blogs,
view others' blogs, and interact with them through likes.

**Features**
- User Authentication: Users can create profiles and log in securely to the application.
- Blog Creation: Authenticated users can create and publish their own blogs.
- Blog Viewing: Users can read and view blogs posted by other users.
- Like and Unlike: Users can like or unlike blogs to show appreciation or change their opinion.
- Blog Deletion: Users have the ability to delete their own blog posts.
- Likes Counter: The application tracks and displays the number of likes each blog receives.
- User Profile: Users can view their own profile with their posted blogs and likes, as well as profiles of other users.

**Technologies Used**
- Laravel: Backend and frontend are built using the Laravel framework.
- SQLite: The application uses SQLite as the database for storing user and blog information.

**Installation**
1. Clone the repository from GitHub.
2. Navigate to the project directory.
3. Install dependencies using Composer: `composer install`
4. Create a copy of the `.env.example` file and rename it to `.env`.
5. Generate an application key: `php artisan key:generate`
   
**Database Setup** 
1. In the project root directory, run the following command to create an empty SQLite database file:
 touch database/database.sqlite
2. Run migrations to create the required database tables: `php artisan migrate`
3. Update the `.env` file to point to the correct database path:
DB_CONNECTION=sqlite
DB_DATABASE=absolute_path_to_your_project/database/database.sqlite
4. Replace `absolute_path_to_your_project` with the actual path to your project folder.
5. Run migrations to create the required database tables: `php artisan migrate`
6. Start the development server: `php artisan serve`
7. Access the application by visiting: `http://localhost:8000`

**Usage**
1. Register a new account or log in with your existing credentials.
2. Create your blog post by clicking on the "New Blog" button.
3. View blogs from other users on the homepage.
4. Like or unlike blogs by clicking on the like icon.
5. Delete your own posts using the delete button on your blog post.
6. View user profiles to see their posts and likes.


**Contact Information**
- https://www.linkedin.com/in/sedigheh-ghazinezam-3753aa7b/
