---
statblock: true
name: 'Merrow Mage'
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Monstrosity
cr: 4
ac: 13
hp: 45
hit_dice: '6d10 + 12'
speed: '10 ft., swim 40 ft.'
stats:
    - 18
    - 10
    - 14
    - 10
    - 12
    - 14
senses: 'darkvision 60 ft., passive Perception 11'
languages: 'Abyssal, Aquan, Giant, Primordial'
traits:
    0: { name: Amphibious, desc: 'The merrow can breathe air and water.' }
    1: { name: Regeneration, desc: 'The merrow regains 10 hit points at the beginning of each of its turns as long as it has at least 1 hit point.' }
    2: { name: 'Innate Spellcasting', desc: "The mage's innate spellcasting ability is Charisma (spell save DC 12). It can innately cast the following spells, requiring no material components:" }
    traits: ['At will: darkness, invisibility', '1/day: charm person']
actions:
    - { name: Claws, desc: "Melee Weapon Attack: +6 to hit, reach 5 ft., one target. Hit: 11 (2d6 + 4) piercing damage, and the target is grappled (escape DC 14). Until this grapple ends, the merrow can't attack a different creature with its claws." }
    - { name: Harpoon, desc: 'Melee or Ranged Weapon Attack: +6 to hit, reach 10 ft. or range 20/60 ft., one target. Hit: 11 (2d6 + 4) piercing damage. The target makes a DC 14 Strength saving throw. On a failure, the merrow pulls the target up to 20 feet toward the merrow.' }
'bonus actions':
    - { name: Bite, desc: 'Melee Weapon Attack: +6 to hit, reach 5 ft., one target. Hit: 6 (1d4 + 4) piercing damage, or 9 (2d4 + 4) piercing damage if the target is grappled.' }
    - { name: 'Mage Bolt (3/Day)', desc: 'The mage targets a creature within 30 feet. The target makes a DC 12 Dexterity saving throw, taking 21 (6d6) lightning damage on a failed save or half damage on a success.' }
    - { name: Shapeshift, desc: "The mage changes its form to that of a Medium merfolk or back into its true form. While shapeshifted, it can't use its Bite attack but its statistics are otherwise unchanged except for its size. It reverts to its true form if it dies." }
    - { name: 'Darkness (2nd-Level; V, S, Concentration)', desc: "Magical darkness spreads from a point within 60 feet of the mage, filling a 15-foot-radius sphere and spreading around corners. It remains for 1 minute. A creature with darkvision can't see through this darkness, and nonmagical light can't illuminate it." }
    - { name: 'Invisibility (2nd-Level; V, S, Concentration)', desc: 'The mage is invisible for 1 hour or until it attacks, uses Mage Bolt, or casts a spell.' }
combat:
    - { name: 'The merrow grabs creatures in its claws and then bites them', desc: 'If an enemy is up to 20 feet away, it uses its harpoon and pulls the enemy into its reach. It uses its claws for opportunity attacks so that it can grapple fleeing creatures.' }

---
```statblock
monster: Merrow Mage
```
