<h2><?php echo $title; ?></h2>
 
<table border='1' cellpadding='4'>
    <tr>
        <td><strong>Title</strong></td>
        <td><strong>Content</strong></td>
        <td><strong>Action</strong></td>
    </tr>
<?php foreach ($blogs as $blog): ?>
        <tr>
            <td><?php echo $blog['title']; ?></td>
            <td><?php echo $blog['text']; ?></td>
            <td>
                <a href="<?php echo site_url('blogs/'.$blog['slug']); ?>">View</a> | 
                <a href="<?php echo site_url('blogs/edit/'.$blog['id']); ?>">Edit</a> | 
                <a href="<?php echo site_url('blogs/delete/'.$blog['id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
            </td>
        </tr>
<?php endforeach; ?>
</table>
