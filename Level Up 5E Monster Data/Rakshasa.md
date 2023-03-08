---
statblock: true
name: Rakshasa
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Fiend
cr: 13
ac: 16
hp: 161
hit_dice: '19d8 + 76'
speed: '40 ft.'
stats:
    - 16
    - 16
    - 18
    - 16
    - 16
    - 20
damage_resistances: 'bludgeoning and slashing from nonmagical weapons'
skillsaves:
    - { deception: 10 }
    - { insight: 8 }
senses: 'darkvision 60 ft., passive Perception 13'
languages: 'Common, Infernal, one other'
traits:
    0: { name: 'Innate Spellcasting', desc: "The rakshasa's innate spellcasting ability is Charisma (spell save DC 18). It can innately cast the following spells, requiring no material components:" }
    traits: ['At will: detect magic, mage hand, major image', '3/day each: charm person, dominate person, fly (self only), invisibility (self only), locate person, modify memory, true seeing']
    1: { name: 'Lawful Evil', desc: 'The rakshasa radiates a Lawful and Evil aura.' }
    2: { name: 'Limited Magic Immunity', desc: 'Any spell that would target or detect the rakshasa, or cause the rakshasa to make a saving throw, fails unless the spell is 5th-level or higher, or the rakshasa voluntarily allows it to be cast.' }
    3: { name: 'Magic Resistance', desc: 'The rakshasa has advantage on saving throws against spells and other magical effects.' }
actions:
    - { name: Multiattack, desc: 'The rakshasa makes two attacks.' }
    - { name: 'Claw (True Form Only)', desc: 'Melee Weapon Attack: +8 to hit, reach 5 ft., one target. Hit: 10 (2d6 + 3) slashing damage. If the target is a creature, it is cursed. Whenever a cursed creature takes a long rest, it is troubled by terrible visions and dreams and gains no benefit from the rest. The curse can be lifted with remove curse and similar magic.' }
    - { name: Rapier, desc: 'Melee Weapon Attack: +8 to hit, reach 5 ft., one target. Hit: 7 (1d8 + 3) piercing damage.' }
    - { name: 'Sweet Promises', desc: 'The rakshasa targets a creature that can hear it within 60 feet, offering something the target covets. The target makes a DC 18 Wisdom saving throw. On a failure, the target is charmed until the end of its next turn, and stunned while charmed in this way.' }
    - { name: 'Invisibility (2nd-Level; V, S, Concentration)', desc: 'The rakshasa is invisible for 1 hour or until it attacks or casts a spell.' }
    - { name: 'Fly (3rd-Level; V, S, Concentration)', desc: 'The rakshasa gains a fly speed of 60 feet.' }
reactions:
    - { name: Counterproposal, desc: 'The rakshasa uses Sweet Promises on a creature that attacked it or attempted to target it with a spell.' }
'bonus actions':
    - { name: Shapeshift, desc: 'The rakshasa magically changes its form to that of any Medium or Small humanoid or to its true form. While shapeshifted, its statistics are unchanged.' }
    - { name: 'Read Thoughts', desc: "The rakshasa magically reads the surface thoughts of one creature within 60 feet that it can see. Until the end of the rakshasa's turn, it has advantage on attack rolls and on Deception, Insight, Intimidation, and Persuasion checks against the creature." }
    - { name: 'Quickened Spell', desc: 'The rakshasa casts invisibility or fly.' }
combat:
    - { name: 'The rakshasa avoids fighting powerful enemies, preferring instead to cause mischief from afar', desc: 'If forced into battle, it fights with its claws (or its rapier if masking its identity) while confounding enemies with Counterproposal and Read Thoughts. The rakshasha has no interest in dying and uses Quickened Spell to fly away or flee invisibly when bloodied. If the rakshasa escapes after cursing opponents with its claw, the rakshasa may attack at a later time to take advantage of their weakness.' }

---
```statblock
monster: Rakshasa
```
