# Index in form builders

It is necessary to be careful when using check boxes in particular in form builders without an index. This code, for example will result in an extra 'item' being submitted that contains only an un-checked checkbox:

    <%= simple_form_for item_batch do |f| %>
      <% batch.items.each do |line| %>
        <%= f.fields_for :item_attrs, line, index: '' do |gf| %>
          <%= gf.check_box :selected, data: { check_group: check_all_group(:payments) } %><br>
          <%= gf.input :description, label: false, placeholder: 'Description' %>
        <% end %>
      <% end %>
    <% end %>

This is because the field will be named something like `item_attrs[][selected]` and becasue rails auto-generates a hidden field for the check box value (because un-checked boxes don't get submitted at all) the result here is that if you check the box then both a selected and un-selected value will be submitted.

To get around this provide an index using code like the following:

    <%= simple_form_for item_batch do |f| %>
      <% batch.items.each_with_index do |line, index| %>
        <%= f.fields_for :item_attrs, line, index: index do |gf| %>
          <%= gf.check_box :selected, data: { check_group: check_all_group(:payments) } %><br>
          <%= gf.input :description, label: false, placeholder: 'Description' %>
        <% end %>
      <% end %>
    <% end %>

Now all the fields will have an index, e.g. `item_attrs[1][selected]`, which allows rails to disambiguate the individual items and manage the submission of un-checked boxes properly.
