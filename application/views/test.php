<div>
	
	<p>It’s worth pointing out that Git determines the best common ancestor to use for its merge base; this is different than older tools like CVS or Subversion (before version 1.5), where the developer doing the merge had to figure out the best merge base for themselves. This makes merging a heck of a lot easier in Git than in these other systems.

	Now that your work is merged in, you have no further need for the iss53 branch. You can close the ticket in your ticket-tracking system, and delete the branch:
	</p>
	<code>$ git branch -d iss53</code>
	<b>Basic Merge Conflicts</b>
		<p>Occasionally, this process doesn’t go smoothly. 
		If you changed the same part of the same file differently in the two branches you’re merging together,
		Git won’t be able to merge them cleanly. If your fix for issue #53 modified the same part of a file as the hotfix,
		you’ll get a merge conflict that looks something like this:</p>

	<code>$ git merge iss53
	Auto-merging index.html
	CONFLICT (content): Merge conflict in index.html
	Automatic merge failed; fix conflicts and then commit the result.</code>

</div>